<?php

namespace App\Console\Commands;

use App\Actions\Blog\BlogFormatContent as BlogBlogFormatContent;
use App\Models\Blog;
use App\Scopes\BlogWorkspaceScope;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;

class BlogClearImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:clear-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Blog clear images';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Clearing blog post images.');

        $blogs = Blog::withoutGlobalScope(BlogWorkspaceScope::class)->get();

        $blogs_count = $blogs->count();

        $this->output->progressStart($blogs_count);

        foreach ($blogs as $blog) {
            $project = $blog->project;

            if (!empty($project)) {
                $project_logo_id = $project->logo_id;
                if (!empty($project_logo_id)) {
                    $old_image = $blog->image;

                    if (empty($old_image)) {
                        $blog->update([
                            'image_id' => $project_logo_id
                        ]);

                        $this->output->progressAdvance();
                        continue;
                    }

                    if ($old_image->id != $project_logo_id) {
                        $blog->update([
                            'image_id' => $project_logo_id
                        ]);

                        $old_image->delete();

                        $this->output->progressAdvance();
                        continue;
                    }
                }
            }

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->output->success('Done');
    }
}
