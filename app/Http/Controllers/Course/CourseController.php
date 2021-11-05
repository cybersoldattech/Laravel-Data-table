<?php

namespace App\Http\Controllers\Course;

use App\Filters\Course\DifficultyFilter;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request  $request)
    {
        return Course::with('subjects')->filter($request, $this->getFilters())->get();
    }
    public  function  getFilters (){
        return [

        ];
    }
}
