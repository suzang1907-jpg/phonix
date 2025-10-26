<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;

class BlogFormatContent extends Action
{
    protected $secure = [
        'blog',
        'title',
        'description'
    ];

    public function handle()
    {
        $blog = $this->getData('blog');
        $title = $this->getData('title');
        $description = $this->getData('description');

        $title = $title ?? $blog->title;

        $description = $description;

        if (empty($description)) {
            $blog_content = $blog->blogContent;

            if (!empty($blog_content)) {
                $description = $blog_content->description;
            }
        }

        if (empty($title) || empty($description)) {
            return;
        }

        $title = trim($title);

        $description = preg_replace('/\b((https?|ftp|file):\/\/|www\.)[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', ' ', $description);

        $description = trim($description);

        $new_content = $description;

        $new_content = str_replace($title, '<strong style="color: [/highlight_text_color/];">' . $title . '</strong/>', $new_content);

        if (!empty($blog)) {
            $blog_content = $blog->blogContent;

            if (!empty($blog_content)) {
                if ($new_content != $blog_content->content || $description != $blog_content->description) {
                    $blog_content->update([
                        'description' => $description,
                        'content' => $new_content
                    ]);
                }
            }

            return [
                'blog' => $blog,
            ];
        }

        return [
            'title' => $title,
            'description' => $description,
            'content' => $new_content
        ];
    }
}
