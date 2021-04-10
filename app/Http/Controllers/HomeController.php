<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function work() {
        $projects = DB::table('project')->get();

        return view('work')->with('projects', $projects);
    }

    public function contact() {
        return view('contact');
    }

    public function game() {
        $questions = ["Question 1", "Question 2", "Question 3", "Question 4", "Question 5"];
        return view('game')->with('questions', $questions);
    }
}
