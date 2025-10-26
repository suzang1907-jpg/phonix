<?php

namespace App\Models;

use App\Scopes\BlogWorkspaceScope;
use App\Services\ProjectService;
use App\Traits\Models\BelongsToLocation;
use App\Traits\Models\Downloadable;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dev\LaravelAssets\Models\Image;

class Blog extends Model
{
    use BelongsToLocation;
    use HasFactory;
    use Downloadable;
    use Searchable;
    use Viewable;
    use Listable;
    use Vue;
    use Randomable;

    protected $guarded = [];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    public $searchable = [
        'title',
        'short_description'
    ];

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new BlogWorkspaceScope);
    }

    public function location()
    {
        return $this->belongsTo(Location::class)->with(['country', 'city', 'district']);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function blogContent()
    {
        return $this->belongsTo(BlogContent::class);
    }

    public function blogContentDescription()
    {
        $content = $this->blogContent;

        if (empty($content)) {
            return '';
        }

        return $content->description;
    }

    public function getFormattedContent(Project | null $project = null)
    {
        $content = $this->blogContent;

        $text = '';

        if (!empty($content)) {
            $text = $content->text;
        } else {
            $text = $this->content;
        }

        if (empty($text)) {
            return '';
        }

        $highlight_color = '#ffffff';

        $project = $project ?? ProjectService::getProject();

        if (!empty($project->getMetaData('highlight_text_color'))) {
            $highlight_color = $project->getMetaData('highlight_text_color');
        }

        $text = str_replace('[/highlight_text_color/]', $highlight_color, $text);

        return $text;
    }

    public function vue()
    {
        $data = $this->toArray();

        if (auth()->check()) {
            $data['location'] = $this->location?->vue();

            $blog_content = $this->blogContent;

            if (!empty($blog_content)) {
                $data['description'] = $blog_content->description;
                $data['content'] = $blog_content->content;
            }
        }

        return $data;
    }
}
