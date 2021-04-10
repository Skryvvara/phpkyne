<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Config;


class ContactController extends Controller
{
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
        $address = config('values.dev_mail');

        $message = "Message sent successfully!";
        $success = true;
        try {
            Mail::to($address)->send(new ContactMail($data));
        } catch(\Exception $exception) {
            $message = "Failed to send message!";
            $success = false;
        }

        if (Mail::failures()) {
            $message = "Failed to send message!";
            $success = false;
        }

        return redirect()->back()->with(['message' => $message, 'success' => $success]);
    }
}
