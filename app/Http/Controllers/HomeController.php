<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\order;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    // public function adminHome()
    // {
    //     // $message = contact::all();
    //     // dd($message);
    //     return view('admin.adminHome',compact('message'));
    // }

    public function delete()
    {
        $user = User::find(Auth::user()->id);
        Auth::logout();
        if ($user->delete()) {
            return redirect('/login')->with('Success', 'Account Deleted.');
        }
    }
    public function updateUser(){
        return view('updateProfile');
    }
    public function update(Request $request){


        $oldUserData = User::find(Auth::user()->id);
        $newUserData = new User;
        $newUserData->id = $oldUserData->id;
        $newUserData->name = $request->name;
        $newUserData->email = $request->email_new;
        $newUserData->password = Hash::make($request->password);
        if($oldUserData->type =='admin' || $oldUserData->type == 1)
            $newUserData->type = 1;
        else if($oldUserData->type =='user' || $oldUserData->type == 0)
            $newUserData->type = 0;

        if($oldUserData->name == $newUserData->name)
            $newUserData->name = $oldUserData->name;
        if($oldUserData->email == $newUserData->email)
            $newUserData->email = $oldUserData->email;

        $oldUserData->delete();
        $newUserData->save();
        if($oldUserData && $newUserData){
            Auth::logout();
            return redirect('/login')->with('Success', 'Account updated.');
        }
        else
            return back()->with('Fail','Account could not be updated.');
    }
    public function addtask(Request $request){

        $task = new task;
        $task->clientId = $request['clientId'];
        $task->client = $request['client'];
        $task->date = $request['completionDate'];
        $task->priority = $request['priority'];
        $task->taskType = $request['taskType'];
        $task->taskDescription = $request['taskDescription'];

        $task->save();
    }
    public function gettask(){
        $clientId = (Auth::user()->id);
        $clientId = 1;
        $task = DB::select('select * from task where clientId = '.$clientId);
        return response()->json([
            'task'=>$task,
        ]);
    }
    public function getOrders(){
        // $orders = DB::select('select card_holder,title,price from orders');

        // return view('admin.order', compact('orders'));
        $orders = order::join('users', 'users.id', '=', 'orders.id')
                ->get(['users.name', 'orders.title', 'orders.price']);

        return view('admin.order',compact('orders'));
    }

    public function getUsers(){
        $users = DB::table('users')
        ->select('name', 'email', 'type')
        ->get();
        return view('admin.users', compact('users'));
    }

    public function getStats(){
        $stats = DB::table('orders')
        ->select('title')
        ->get();
        return view('admin.stats', compact('stats'));
    }

    public function updateAdmin(){
        return view('admin.profile');
    }
    public function gettaskAdmin(){
        $taskList = DB::select('select * from task');
        $message = contact::all();
        return view('admin.adminHome',compact('taskList', 'message'));
    }
    public function getwallet(){
        return view('wallet');
    }
    public function getbooking(){
        return view('booking');
    }

}
