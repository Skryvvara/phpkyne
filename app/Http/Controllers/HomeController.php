<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function work() {
        $projects = DB::table('project')->get();

        return view('work')->with('projects', $projects);
    }

    public function game() {
        return view('game');
    }

    public function getQuestions() {
        $questions = ["Question 1", "Question 2", "Question 3", "Question 4", "Question 5"];

        return json_encode($questions);
    }
}
