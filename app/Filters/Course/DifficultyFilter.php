<?php

namespace App\Filters\Course;

use Illuminate\Database\Eloquent\Builder;

class DifficultyFilter
{
    public $difficultyProperty = ['beginner', 'advanced', 'intermediaire'];

    public function filter(Builder $builder, $value)
    {
        if (in_array($value, $this->difficultyProperty)) {
            return $builder->where('difficulty', $value);
        } else {
            return $builder;
        }
    }
}
