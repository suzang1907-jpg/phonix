<?php

namespace App\Http\Middleware;

use Dev\PHPActions\Action;
use App\Actions\GoogleAuthentication\GoogleAuthenticationStore;
use App\Models\Domain;
use App\Routing\Admin;
use Closure;
use Illuminate\Support\Facades\App;
use App\Services\ProjectService;

class VerifyGoogleAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();

        if (App::runningUnitTests()) {
            return $next($request);
        }

        $project = ProjectService::getProject();

        if (empty($project)) {
            return $next($request);
        }

        if ($project->googleIntegrations->isEmpty()) {
            return $next($request);
        }

        $google_auhentication = $user->googleAuthentication;

        if (empty($google_auhentication)) {
            $google_auhentication = Action::build(GoogleAuthenticationStore::class)->data([
                'name' => 'Blogger',
            ])->run()->getData('google_authentication');
        }


        if ($google_auhentication->shouldAuthenticate()) {
            return redirect(Admin::route('admin.googleauthentication.authenticate', [
                'id' => $google_auhentication->id
            ]));
        }

        return $next($request);
    }
}
