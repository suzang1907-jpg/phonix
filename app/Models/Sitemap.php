<?php

namespace App\Models;

use App\Scopes\DomainProjectScope;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitemap extends Model
{
    use HasFactory;
    use Viewable;
    use Listable;
    use Vue;
    use Randomable;
    use Searchable;

    protected $guarded = [];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class)->withoutGlobalScope(DomainProjectScope::class);
    }

    public function vue()
    {
        $data = $this->toArray();

        if (!auth()->check()) {
            unset($data['google_site_id']);
            unset($data['google_permission_level']);
            unset($data['google_sitemap_submitted_at']);
        }

        return $data;
    }
}
