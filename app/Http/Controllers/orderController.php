<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $order = new order;
            $order->card_holder = $request->input('username');
            $order->title = $request->input('title');
            $order->price = $request->input('price');
            $order->credit_card_number = $request->input('cardNumber');

            $orderId = DB::table('orders')
            ->select('id')
            ->where('card_holder','=',Auth::user()->name)
            ->get()->first();


            $res = $order->save();

            $user = new User;
            $user->id = Auth::user()->id;
            $user->name = Auth::user()->name;
            $user->email = Auth::user()->email;
            $user->orderId = $orderId->id;

            $user->password = Hash::make(Auth::user()->password);

            if(Auth::user()->type =='admin' || Auth::user()->type == 1)
                $user->type = 1;
            else if(Auth::user()->type =='user' || Auth::user()->type == 0)
                $user->type = 0;

            $findCurrent = User::find(Auth::user()->id);
            $findCurrent->delete();
            $user->save();

            if($res && $user && $findCurrent)
             return back()->with('success','Payment succesfully transfered');
            else
             return back()->with('fail','Something went wrong');
        }
        else{
            return redirect('/login')->with('login', "Please Login first");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
