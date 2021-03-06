<?php

namespace App\Filters\Course;

use Illuminate\Database\Eloquent\Builder;

class SubjectFilter
{
    public $difficultyProperty = ['beginner', 'advanced', 'intermediaire'];

    public function filter(Builder $builder, $value)
    {
        return $builder->whereHas('subjects', function (Builder $builder) use ($value) {
            $builder->where('slug', $value);
        });
    }
}
