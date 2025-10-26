<?php

namespace App\Models;

use App\Traits\Models\Listable;
use App\Traits\Models\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Google\Client;
use Dev\LaravelAssets\Models\File;

class GoogleIntegration extends Model
{
    use HasFactory;
    use Viewable;
    use Listable;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function file()
    {
        return $this->belongsTo(File::class);
    }

    public function client(): Client
    {
        $client = new Client();
        $client->setAuthConfig($this->file->path());
        $client->setClientId($this->client_id);

        return $client;
    }

    public function googleAuthentications()
    {
        return $this->hasMany(GoogleAuthentication::class);
    }
}
