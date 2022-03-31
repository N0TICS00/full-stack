<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Mail;
class EmailController extends Controller
{
    public function sendEmail(Request $req){
        $details = [
            'title' => "Mail from Dag's Tech Co.",
            'body' => "Hi Costumer!
            We hope that you'll enjoy our Courses!"
            ];
            \Mail::to($req->input()["email"])->send(new Mail($details));
            return redirect("/#discover")->with('success', 'Email Sended!');
    }
}
