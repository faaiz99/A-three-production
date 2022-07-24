<?php

namespace App\Http\Controllers;

use App\Models\completedOrder;
use App\Models\wallet;
use App\Models\order;
use App\Models\contact;
use App\Models\service;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


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
    public function index(){
        return view('home');
    }
    // public function adminHome(){
    //     return view('admin.adminHome');
    // }
    public function delete(){
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
    public function getOrders(){
        $orders = order::join('users', 'users.id', '=', 'orders.userId')
                ->get(['users.name', 'orders.title', 'orders.price' , 'users.id' , 'orders.date']);
        $completedOrders =  completedOrder::all();
        return view('admin.order',compact('orders', 'completedOrders'));
    }
    public function getUsers(Request $request){
        $users = DB::table('users')
        ->select('name', 'email', 'type','id')
        ->get();

        return view('admin.users', compact('users'));

        // return response()->json($users);
    }
    public function updateUsers(Request $request){
        if($request->action=="Update"){
            $updateUser = user::find($request->id);
            $updateUser->name = $request->name;
            $request->email = $request->email;
            if($request->type =='admin'){
                $updateUser->type = 1;
            }
            else
                $updateUser->type = 0;
            $res = $updateUser->save();
            if($res)
                return redirect('/admin/users')->with('update',"User Updated");
        }
        if($request->action=="Delete"){
            $delete = user::find($request->id);
            $result = $delete->delete();
            if($result)
                return back()->with('delete',"User Deleted");

        }
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
    public function getwallet(Request $request, $id){

        $wallet = DB::table('wallets')
        ->select('*')
        ->where('clientId','=',Auth::user()->id)
        ->get();

        return view('wallet',compact('wallet'));
    }
    public function updateWallet(Request $request, $id){

        if($request->action == "Update"){
            // $wallet = new wallet;
            // $wallet = DB::table('wallets')
            // ->select('*')
            // ->where('clientId','=',$id)
            // ->get();

            // $wallet->credit_card_number = $request->credit_card_number;
            // $wallet->expirationDate = $request->expirationDate;

            $res = DB::table('wallets')
            ->where('clientId',$id)
            ->update(['credit_card_number' => $request->cardNumber,
            'expirationDate'=>$request->expirationDate]);

            if($res){
                return redirect('wallet/'.$id)->with('Usuccess',"Card Updated!");
            }
        }
        if($request->action =="Delete"){
            // $wallet = new wallet;
            $wallet = wallet::where('clientId','=',$id)->delete();
            $res = $wallet;
            if($res)
                return redirect('/wallet/'.$id)->with('Dsuccess',"Card Deleted!");
        }

    }
    public function getbooking(Request $request, $id){

        $bookings = DB::table('orders')
        ->select('id', 'title', 'price','date','card_holder','credit_card_number')
        ->where('userId','=',$id)
        ->get();
       // dd(count($bookings));
        if(count($bookings)==0){
            $bookings->toArray();
            // $bookings-> title = "";
            // $bookings-> price = "";
            // $bookings-> card_holder = "";
            // $bookings-> date = "";


            return view('booking',compact('bookings'))->with('nobooking','No Bookings found or Existing are completed');
        }
        else{
             $bookings->toArray();
            return view('booking',compact('bookings'));
        }
    }
    public function updateBooking(Request $request, $id){
      // dd($request);
        if($request->action == "Update"){
            $updateData = DB::table('orders')
            ->select('id')
            ->where('userId','=', $id)
            ->get();
           // dd($updateData[0]->id);

            $updateOrder = order::find($updateData[0]->id);
            $updateOrder->title = $request->service;
            $updateOrder->date = $request->date;

            $res = $updateOrder->save();
            if($res)
                return redirect('/booking/'.$id)->with('success','reccord updated');
            else
                return redirect('/booking/'.$id)->with('fail','reccord could not be updated');
        }
        if($request->action == "Delete"){

            $updateData =  DB::table('orders')
            ->select('id')
            ->where('userId','=', $id)
            ->get();
           // dd($updateData);
           $deleteOrder = order::find($updateData[0]->id);
           //dd($deleteOrder);
            $res = $deleteOrder->delete();
            if($res)
                return redirect('/booking/'.$id)->with('success','Booking deleted');
            else
                return redirect('/booking/'.$id)->with('fail','Booking could not be updated');
        }
    }
    public function updateOrder(Request $request){

        if($request->action =="Update"){
            //dd($request);
            // $updateData = order::find($request->orderId);

            DB::table('orders')
            ->where('userId',$request->orderId)
            ->update([
            'title' => $request->service,
            'date'=>$request->date,
            'price'=>$request->price,
            ]);


            //$updateData = new order;
            // $updateData = DB::table('orders')
            // ->select('*')
            // ->where('userId','=',$request->orderId)
            // ->get();
            // //dd($updateData);



            // $updateData[0]->title = $request->service;
            // $updateData[0]->price = $request->price;
            // $updateData[0]->date = $request->date;
            $res = true;
            if($res)
                return redirect('/admin/orders')->with('success','reccord updated');
            else
                return redirect('/admin/orders')->with('fail','reccord could not be updated');

        }
        if($request->action =="Complete"){
           // dd($request);
            $completeOrder = new completedOrder;
            // $completeOrderData = order::find($request->orderId);
            $completeOrderData = DB::table('orders')
             ->select('id' , 'card_holder','credit_card_number')
             ->where('userId','=',$request->orderId)
             ->get();
             //dd($completeOrderData[0]->id);
            // $completeOrderData = order::find($request->orderId);
           // dd($completeOrderData);


            $completeOrder->id = $completeOrderData[0]->id;
            $completeOrder->card_holder = $completeOrderData[0]->card_holder;
            $completeOrder->credit_card_number = $completeOrderData[0]->credit_card_number;
            $completeOrder->title = $request->service;
            $completeOrder->price =$request->price;
            $completeOrder->date = $request->date;

            $delete = order::find($completeOrderData[0]->id);
            $res2 = $delete->delete();
            $res = $completeOrder->save();
            if($res && $res2){
               return redirect('/admin/orders')->with('completed','Booking Completed');
            }
        }
        if($request->action =="Delete"){
          //  dd($request);
            $deleteData = order::find($request->orderId);
            if($deleteData!= null){
                $res = $deleteData->delete();
                if($res)
                    return redirect('/admin/orders')->with('success','reccord deleted');
                else
                    return redirect('/admin/orders')->with('fail','reccord could not be deleted');
            }
            else if($deleteData == null) {
                $deleteData = completedOrder::find($request->orderId);
                $res = $deleteData->delete();
                if($res)
                    return redirect('/admin/orders')->with('success','reccord deleted');
                else
                    return redirect('/admin/orders')->with('fail','reccord could not be deleted');
            }
        }
    }
    public function getServices(){

        $services = service::all();

        // return response()->json([
        //     'service'=>$services
        // ]);

         return view('admin.adminHome',compact('services'));
    }
    public function updateServices(Request $request){

        $res = DB::table('services')
        ->where('id',$request->id)
        ->update(['title' => $request->service,
        'price'=>$request->price,
        'description'=>$request->description]);

        //dd($request->service);
        //$service = service::find($request->id);
        // $serviceUpdate = new service;
        // $serviceUpdate->id = $request->id;
        // $serviceUpdate->title = $request->service;
        // $serviceUpdate->price = $request->price;
        // $serviceUpdate->description = $request->description;
        // $res = $serviceUpdate->save();
        if($res)
            {
                return redirect('/admin/home')->with('updated','Service Updated');
            }
        else
            return redirect('/admin/home')->with('notupdated','Service not Updated');

    }

    public function mssgIndex(){

        $mssg = contact::all();
        return view('admin.message',compact('mssg'));
    }
    public function getMssg(){

        $mssg = contact::all();
        return response()->json([
            'mssg'=>$mssg
        ]);
    }
    public function deleteMssg(Request $request, $id){
        dd("hello");
        $mssg = contact::find($id);
        $mssg->delete();
    }

}
