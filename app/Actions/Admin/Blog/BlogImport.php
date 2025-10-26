<?php

namespace App\Actions\Admin\Blog;

use App\Actions\Blog\BlogStore;
use App\Actions\Csv\CsvImport;
use App\Routing\Admin;
use App\Routing\Api;
use Dev\PHPActions\Action;

class BlogImport extends Action
{
    public function handle()
    {
        return;
        $csv = Action::build(CsvImport::class)->data([
            'csv' => $this->getData('backup')
        ])->run()->getData('csv');

        if (empty($csv)) {
            return Api::error();
        }

        $ids = [];

        $key_count = $this->getData('key_count', 0);
        $item_count = $this->getData('item_count', 0);

        $current_id = 0;

        if (empty($key_count)) {
            return Api::error();
        }

        $logo_base64 = base64_encode(file_get_contents(public_path('logo.jpg')));

        $blogData = [
            'image' => $logo_base64,
            'disable_location_bind' => true
        ];

        if (!empty($item_count)) {
            for ($i = 0; $i < $item_count; $i++) {
                $key = $i;
                $value = $csv[$key] ?? null;

                if ($key < $key_count) {
                    array_push($ids, $value);
                } else {
                    if ($ids[$current_id] == 'title') {
                        $blogData['title'] = $value;
                    } elseif ($ids[$current_id] == 'description') {
                        $blogData['description'] = $value;
                    } elseif ($ids[$current_id] == 'id') {
                        $blogData['id'] = $value;
                    }

                    if ($current_id >= $key_count - 1) {
                        if (!empty($blogData['title'] ?? null)) {
                            $blog = Action::build(BlogStore::class)->data($blogData)->run()->getData('blog');
                        }

                        $current_id = 0;
                        $blogData = [
                            'disable_location_bind' => true,
                            'image' => $logo_base64
                        ];
                    } else {
                        $current_id++;
                    }
                }
            }
        } else {

            foreach ($csv as $key => $value) {
                if ($key < $key_count) {
                    array_push($ids, $value);
                } else {
                    if ($ids[$current_id] == 'title') {
                        $blogData['title'] = $value;
                    } elseif ($ids[$current_id] == 'description') {
                        $blogData['description'] = $value;
                    } elseif ($ids[$current_id] == 'id') {
                        $blogData['id'] = $value;
                    }

                    if ($current_id >= $key_count - 1) {
                        $blog = Action::build(BlogStore::class)->data($blogData)->run()->getData('blog');

                        $current_id = 0;
                        $blogData = [
                            'disable_location_bind' => true,
                            'image' => $logo_base64
                        ];
                    } else {
                        $current_id++;
                    }
                }
            }
        }

        return Api::done([], Admin::route('admin.blog.list'));
    }
}
