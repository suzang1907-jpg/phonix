<?php

namespace Dev\LaravelAssets\Actions\Markdown;

use Dev\LaravelAssets\Models\Markdown;
use Dev\PHPActions\Action;

/**
 * @data string $id
 */
class MarkdownDestroy extends Action
{
    protected $secure = [
        'id',
    ];

    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return;
        }

        $markdown = Markdown::where('id', $id)->first();

        if (empty($markdown)) {
            return;
        }

        $markdown->delete();
    }
}
