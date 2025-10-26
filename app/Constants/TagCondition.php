<?php

namespace App\Constants;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;

class TagCondition
{
    public static string $contains_word = 'contains_word';
    public static string $contains_text = 'contains_text';
    public static string $is_greater_than = 'is_greater_than';
    public static string $is_greater_or_equals_than = 'is_greater_or_equals_than';
    public static string $is_less_than = 'is_less_than';
    public static string $is_less_or_equals_than = 'is_less_or_equals_than';
    public static string $equals = 'equals';
    public static string $not_equals = 'not_equals';
    public static string $empty = 'empty';
    public static string $not_empty = 'not_empty';

    public static function conditions(): array
    {
        return [
            self::$contains_text,
            self::$contains_word,
            self::$empty,
            self::$not_empty,
            self::$equals,
            self::$not_equals,
            self::$is_greater_than,
            self::$is_greater_or_equals_than,
            self::$is_less_than,
            self::$is_less_or_equals_than
        ];
    }

    public static function query(Tag $tag): Builder | null
    {
        $conditions = $tag->conditions;

        if (empty($conditions)) {
            return null;
        }

        $query = Blog::whereCity()->whereDistrict();

        foreach ($conditions as $condition) {
            $query = self::condition($query, $condition);
        }

        return $query;
    }

    public static function condition(Builder $query, mixed $condition): Builder
    {
        $value = $condition['value'] ?? null;
        $key = $condition['key'] ?? null;
        $tmpCondition = $condition['condition'] ?? null;

        if (!self::validateKey($key)) {
            return $query;
        }

        if (empty($tmpCondition)) {
            return $query;
        }

        if (str_contains($key, '.') && str_starts_with($key, 'domains')) {
            $keys = explode('.', $key);

            $query->whereHas('user.' . $keys[0], function ($query) use ($keys, $value, $tmpCondition) {
                return self::where($query, $keys[0] . '.' . $keys[1], $value, $tmpCondition);
            });

            return $query;
        }

        $query = self::where($query, $key, $value, $tmpCondition);


        return $query;
    }

    public static function validateKey(mixed $key): bool
    {
        if (empty($key)) {
            return false;
        }

        if (str_contains($key, 'password')) {
            return false;
        }

        if (str_contains($key, 'token')) {
            return false;
        }

        if (str_contains($key, 'code')) {
            return false;
        }

        return true;
    }

    private static function where($query, $key, $value, $condition)
    {
        if ($condition == self::$equals) {
            $query = $query->where($key, '=', $value);

            return $query;
        }

        if ($condition == self::$not_equals) {
            $query = $query->where($key, '!=', $value);

            return $query;
        }

        if ($condition == self::$empty) {
            $query = $query->where($key, '=', '');

            return $query;
        }

        if ($condition == self::$not_empty) {
            $query = $query->where($key, '!=', '');

            return $query;
        }

        if ($condition == self::$is_greater_than) {
            $query = $query->where($key, '>', $value);

            return $query;
        }

        if ($condition  == self::$is_greater_or_equals_than) {
            $query = $query->where($key, '>=', $value);

            return $query;
        }

        if ($condition == self::$is_less_than) {
            $query = $query->where($key, '<', $value);

            return $query;
        }

        if ($condition == self::$is_less_or_equals_than) {
            $query = $query->where($key, '<=', $value);

            return $query;
        }

        if ($condition == self::$contains_text) {
            $query = $query->where($key, 'like', '%' . $value . '%');

            return $query;
        }

        if ($condition == self::$contains_word) {
            $query = $query->where($key, 'like', ' %' . $value . '% ');

            return $query;
        }

        return $query;
    }
}
