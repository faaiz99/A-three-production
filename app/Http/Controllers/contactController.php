<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    function sendMessage(Request $req){
        $message = new contact;
        $message->first_name = $req->first_name;
        $message->last_name = $req->last_name;
        $message->subject = $req->subject;
        $message->email = $req->email;
        $message->message = $req->message;
        $message->save();
        return redirect('/contact')->with('success', 'Message succesfully sent');
    }
}
