<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Config;


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
    public function contactsubmit(Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        $address = \config('values.dev_mail');
        try {
            Mail::to($address)->send(new ContactMail($data));
        } catch(\Exception $exception) {
            return redirect()->back()->with(['message' => 'Message not sent!', 'success' => false]);
        }

        if (Mail::failures()) {
            redirect()->back()->with(['message' => 'Message not sent!', 'success' => false]);
        }

        return redirect()->back()->with(['message' => 'Message sent successfully!', 'success' => true]);
    }

    public function game() {
        $questions = ["Question 1", "Question 2", "Question 3", "Question 4", "Question 5"];
        return ('game')->with('questions', $questions);
    }
}
