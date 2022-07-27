<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

        $course = Course::find(10);
        dd($course->lessons(), $course->lessons);
        foreach ($course->lesson as $lesson) {
            dd($lesson);
        }
        $review = Review::find(10);
    }
}
