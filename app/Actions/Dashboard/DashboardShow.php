<?php

namespace App\Actions\Dashboard;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Models\Customer;
use App\Scopes\ArticleActiveScope;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Cache;
use Google\Analytics\Data\V1beta\Client\BetaAnalyticsDataClient;
use Google\Analytics\Data\V1beta\Metric;
use Google\Analytics\Data\V1beta\RunRealtimeReportRequest;

class DashboardShow extends Action
{
    public function handle()
    {
        return [
            'analytics' => [
                'active_users' => $this->getActiveUsers(),
            ],
            'title' => 'Anasayfa',
            'customer_count' => Customer::count(),
            'article_count' => Article::count(),
            'latest_customers' => Customer::latest()->with('articles')->list(3),
            'latest_articles' => Article::withoutGlobalScope(ArticleActiveScope::class)->with('analytics')->latest()->list(3),
        ];
    }

    private function getActiveUsers()
    {
        $cacheKey = 'ga4.realtime.active_users';

        $cacheTtlSeconds = 60;

        $serviceAccountKeyFile = config('google.service_credentials');
        $propertyId = config('google.property_id');

        if (empty($serviceAccountKeyFile) || empty($propertyId)) {
            return null;
        }

        $activeUsers = Cache::remember($cacheKey, $cacheTtlSeconds, function () use ($serviceAccountKeyFile, $propertyId) {
            try {
                $client = new BetaAnalyticsDataClient([
                    'credentials' => $serviceAccountKeyFile,
                ]);

                // Build the Realtime Report Request
                $request = (new RunRealtimeReportRequest())
                    ->setProperty('properties/' . $propertyId)
                    ->setMetrics([new Metric(['name' => 'activeUsers'])]);

                // Make the API call
                $response = $client->runRealtimeReport($request);

                // Extract the value
                $users = 0;
                if (count($response->getRows()) > 0) {
                    $users = $response->getRows()[0]->getMetricValues()[0]->getValue();
                }

                $client->close();

                // Return the data to be cached for 60 seconds
                return $users;
            } catch (\Exception $e) {
                // IMPORTANT: Handle API errors gracefully.
                // You may return a safe default (like 0) or throw the exception.
                logger()->error("Google Analytics Realtime API Error: " . $e->getMessage());
                return 0;
            }
        });

        // The result is either from the cache (fast) or the API (slow, then cached)
        return [
            'active_users' => (int) $activeUsers,
            'cached_at' => now()->toDateTimeString(),
        ];
    }
}
