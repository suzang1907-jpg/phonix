<?php

namespace App\Models;

use App\Scopes\CurrentProjectScope;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
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

    protected $casts = [
        'meta' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();
    }

    public function sites()
    {
        return $this->hasManyThrough(Site::class, Project::class)->withoutGlobalScope(CurrentProjectScope::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function blogs()
    {
        return $this->hasManyThrough(Blog::class, Project::class);
    }

    public function stories()
    {
        return $this->hasManyThrough(Story::class, Project::class);
    }

    public function isDynamicKeywordsEnabled()
    {
        if (empty($this->meta)) {
            return false;
        }

        $dynamic_keywords = $this->meta['dynamic_keywords'] ?? false;

        if (empty($dynamic_keywords)) {
            return false;
        }

        return $dynamic_keywords;
    }

    public function vue()
    {
        $data = $this->toArray();

        if (auth()->check()) {
            $data['projects'] = $this->projects->map(function ($project) {
                return $project->vue();
            });
        }

        return $data;
    }
}
