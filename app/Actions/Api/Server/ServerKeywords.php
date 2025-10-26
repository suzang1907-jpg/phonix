<?php

namespace App\Actions\Api\Server;

use App\Models\Keyword;
use Dev\PHPActions\Action;

class ServerKeywords extends Action
{
    public function  handle()
    {
        $project = Action::build(ServerGetProject::class)->run()->getData('project');

        if (empty($project)) {
            return response()->json();
        }

        $keywords = Keyword::get();

        $result = [];

        foreach ($keywords as $keyword) {
            array_push($result, [
                'id' => $keyword->id,
                'keyword' => $keyword->keyword,
                'project_id' => $keyword->project_id,
            ]);
        }

        return response()->json([
            'keywords' => $result
        ]);
    }
}
