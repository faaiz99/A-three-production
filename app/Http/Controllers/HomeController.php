<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view('adminHome');
    }

    public function delete()
    {
        $user = User::find(Auth::user()->id);
        Auth::logout();
        if ($user->delete()) {
            return redirect('/login')->with('Success', 'Account Deleted.');
        }
    }
    public function update(Request $request){
        $oldUserData = User::find(Auth::user()->id);
        $newUserData = new User;
        $newUserData->id = $oldUserData->id;
        $newUserData->name = $request->name;
        $newUserData->email = $request->email_new;
        $newUserData->password = Hash::make($request->password);


        if($oldUserData->name == $newUserData->name)
            $newUserData->name = $oldUserData->name;
        if($oldUserData->email == $newUserData->email)
            $newUserData->email = $oldUserData->email;
        echo($request);
        $oldUserData->delete();
        $newUserData->save();
        Auth::logout();
        return redirect('/login')->with('Success', 'Account updated.');
    }
}
