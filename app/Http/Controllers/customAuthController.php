<?php

namespace App\Http\Controllers;

use App\Models\client;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class customAuthController extends Controller
{
    public function login(){
        return view('auth.signin');
    }
    public function registration(){
        return view('auth.sign_up');
    }
    public function registerClient(Request $request){
        $client = new client;
        $client->first_name =$request->input('first_name');
        $client->last_name = $request->input('last_name');
        try{
            $client->email = $request->input('email');
        }
        catch(Exception $e){
            ddd($e->getMessage());
        }
        $client->password = Hash::make($request->input('password'));
        $client->contact = $request->input('contact');
        $res = $client->save();
        if($res)
            return back()->with('success','You have sucessfully registered');
        else
            return back()->with('fail','Something went wrong');
    }
    public function loginClient(Request $request){

        $client = client::where('email','=',$request->email)->first();
        if($client)
            if(Hash::check($request->password, $client->password)){
                $request->session()->put('loginId', $client->id);
                return redirect('client');
            }
            else
                return back()->with('fail','Wrong password');
        else
         return back()->with('fail','Email not registered or Password Wrong');
    }
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = client::where('id','=',Session::get('loginId'))->first();
        }
        return view('auth.client', compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('signin');
        }
    }
}
