<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;

class BlogContainsWord extends Action
{
    protected $secure = [
        'title',
        'description',
        'blog',
        'word'
    ];

    public function handle()
    {
        $blog = $this->getData('blog');
        $word = $this->getData('word');
        $description = $this->getData('description');
        $title = $this->getData('title');

        if (empty($word)) {
            return [
                'match' => false
            ];
        }

        if (!empty($blog)) {
            $title = strtolower($blog->title);
            $description = strtolower($blog->blogContentDescription());
        }

        if (!empty($title)) {
            if (str_contains($title, ' ' . $word . ' ')) {
                return [
                    'match' => true
                ];
            }

            if (str_starts_with($title, $word . ' ')) {
                return [
                    'match' => true
                ];
            }
        }

        if (!empty($description)) {
            if (str_contains($description, ' ' . $word . ' ')) {
                return [
                    'match' => true
                ];
            }

            if (str_starts_with($description, $word . ' ')) {
                return [
                    'match' => true
                ];
            }
        }

        return [
            'match' => false
        ];
    }
}
