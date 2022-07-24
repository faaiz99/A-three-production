<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    function sendMessage(Request $request){

        //dd($request);
        $message = new contact;
        $message->first_name = $request->fname;
        $message->last_name = $request->lname;
        $message->subject = $request->subject;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        return redirect('/contact')->with('success', 'Message succesfully sent');
    }
}
