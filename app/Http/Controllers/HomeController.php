<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Lessons;
use App\Models\Reviews;
use App\Models\UserCourse;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Courses::main()->get();
        $reviews = Reviews::main()->get();
        $countCourses = Courses::count();
        $countLessons = Lessons::count();
        $learners = UserCourse::learner()->get()->count();

        return view('home', compact('courses', 'reviews', 'countCourses', 'countLessons', 'learners'));
    }
}
