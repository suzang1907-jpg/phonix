<?php

namespace App\Actions\Tag;

use Dev\PHPActions\Action;
use App\Constants\TagCondition;
use App\Models\Tag;

class TagUpdate extends Action
{
    public function handle()
    {
        $id = $this->getData('id');
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

        if (empty($id)) {
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

        $tagModel = Tag::where('id', $id)->first();

        if (empty($tagModel)) {
            return null;
        }

        if (!empty(Tag::where('tag', $tag)->where('id', '!=', $id)->first())) {
            return null;
        }

        $tagModel->update([
            'tag' => $tag,
            'conditions' => $parsedConditions
        ]);

        return [
            'tag' => $tagModel,
        ];
    }
}
