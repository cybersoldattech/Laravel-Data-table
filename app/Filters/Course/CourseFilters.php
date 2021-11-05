<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;

class CourseFilters extends FilterAbstract
{
    protected $filters = [
        'access' => AccessFilter::class,
        'difficulty' => DifficultyFilter::class,
        'type' => TypeFilter::class,
        'subject' => SubjectFilter::class,
    ];
}
