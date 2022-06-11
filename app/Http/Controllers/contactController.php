<?php

namespace App\Http\Controllers;

use mail;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function sendMail(Request $request){



        $to = 'faaizaslam106@gmail.com';
        $subject = $request->subject;

        $message = $request->message;

        $header = "From".$request->email."\r\n";

        $retval = mail ($to,$subject,$message,$header);

        if( $retval == true ) {
           echo "Message sent successfully...";
        }else {
           echo "Message could not be sent...";
        }

    }
}
