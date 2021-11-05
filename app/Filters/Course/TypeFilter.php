<?php

namespace App\Filters\Course;

use Illuminate\Database\Eloquent\Builder;

class TypeFilter
{
    public $typeroperty = ['project', 'snippet', 'theory'];

    public function filter(Builder $builder, $value)
    {
        if (in_array($value, $this->typeroperty)) {
            return $builder->where('type', $value);
        } else {
            return $builder;
        }
    }
}
