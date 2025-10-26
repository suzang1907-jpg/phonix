<?php

namespace App\Actions\Tag;

use Dev\PHPActions\Action;
use App\Constants\TagCondition;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagStore extends Action
{
    public function handle()
    {
        $tag = $this->getData('tag');
        $conditions = $this->getData('conditions');

        if (empty($conditions)) {
            $conditions = [];
        } else {
            $conditions = json_decode((string)$conditions, true);
        }

        if (empty($tag)) {
            return null;
        }

        $tag = trim($tag);

        if (empty($tag)) {
            return null;
        }

        $parsedConditions = [];

        foreach ($conditions as $condition) {
            $conditionKey = $condition['key'];

            if (!TagCondition::validateKey($conditionKey)) {
                continue;
            }

            if (!in_array($condition['condition'], TagCondition::conditions())) {
                continue;
            }

            $value = $condition['value'];

            if ($value == null) {
                continue;
            }

            if (!is_numeric($value)) {
                $value = trim($value);
            } else {
                $value = floatval($value);
            }

            if ($value == '') {
                continue;
            }

            array_push($parsedConditions, [
                'value' => $value,
                'key' => $conditionKey,
                'condition' => $condition['condition']
            ]);
        }

        $tagModel = Tag::where('tag', $tag)->first();

        if (!empty($tagModel)) {
            return $tagModel;
        }

        $user = auth()->user();

        $id = $user->id . '_' . strtolower(Str::slug($tag, '_'));

        $tagModel = Tag::create([
            'id' => $id,
            'user_id' => $user->id,
            'tag' => $tag,
            'conditions' => $parsedConditions,
        ]);

        return [
            'tag' => $tagModel,
        ];
    }
}
