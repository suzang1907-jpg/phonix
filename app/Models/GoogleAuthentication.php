<?php

namespace App\Models;

use App\Traits\Models\Listable;
use App\Traits\Models\Viewable;
use Exception;
use Google\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleAuthentication extends Model
{
    use HasFactory;
    use Viewable;
    use Listable;

    protected $guarded = [];

    protected $casts = [
        'token' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function googleIntegration()
    {
        return $this->belongsTo(GoogleIntegration::class);
    }

    public function shouldAuthenticate()
    {
        try {
            $token = $this->token;

            if (empty($token)) {
                return true;
            }

            if (!empty($token['error'] ?? null)) {
                return true;
            }

            $client = $this->client();

            if ($client->isAccessTokenExpired()) {
                $client = $this->refreshToken($client);

                if (empty($client)) {
                    return true;
                }

                return $client->isAccessTokenExpired();
            }

            return false;
        } catch (Exception $e) {
        }

        return true;
    }

    public function refreshToken(Client | null $client = null)
    {
        try {
            $client = $client ?? $this->client();

            $token = $client->getRefreshToken();

            if (empty($token)) {
                $token = null;
            }

            if (!empty($token['error'] ?? null)) {
                $token = null;
            }

            $this->update([
                'token' => $token,
            ]);

            $client->setAccessToken($token);

            return $client;
        } catch (Exception $e) {
        }

        return null;
    }

    public function client(): Client
    {
        $client = $this->googleIntegration?->client();

        $token = $this->token;

        if (!empty($token)) {
            if (empty($token['error'] ?? null)) {
                try {
                    $client->setAccessToken($token);
                } catch (Exception $e) {
                }
            }
        }

        return $client;
    }
}
