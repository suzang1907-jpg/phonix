<?php

namespace App\Console\Commands;

use App\Actions\Blog\BlogFormatContent as BlogBlogFormatContent;
use App\Models\Blog;
use App\Scopes\BlogWorkspaceScope;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;

class BlogFormatContent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:format-content';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Blog Format Content';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Formatting blog posts.');

        $blogs = Blog::withoutGlobalScope(BlogWorkspaceScope::class)->get();

        $blogs_count = $blogs->count();

        $this->output->progressStart($blogs_count);

        foreach ($blogs as $blog) {
            Action::build(BlogBlogFormatContent::class)->data([
                'blog' => $blog
            ])->run()->getData('blog');

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->output->success('Done');
    }
}
