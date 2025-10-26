<?php

namespace App\Console\Commands;

use App\Actions\Blog\BlogFormatContent as BlogBlogFormatContent;
use App\Models\Blog;
use App\Scopes\BlogWorkspaceScope;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;
use Dev\LaravelAssets\Models\Image;

class ClearOptimizedImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:optimized-images {size}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear optimized images';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Clearing optimized images.');

        $size = $this->argument('size');

        $images = Image::where('id', 'LIKE', '%_w_' . $size)->get();

        $images_count = $images->count();

        $this->output->progressStart($images_count);

        foreach ($images as $image) {
            $image->delete();

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->output->success('Done');
    }
}
