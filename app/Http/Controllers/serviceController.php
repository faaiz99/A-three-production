<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class serviceController extends Controller
{
    //
    public function index(){
        $data = service::all();
        return view('services',['services'=>$data]);
    }

    public function payment(Request $request, $id){
        $data = service::find($id);
        if(Auth::check()){
            $wallet = DB::table('wallets')
            ->select('*')
            ->where('clientId','=',Auth::user()->id)
            ->get();
            // if(count($wallet)>0)
            //     return view('quotation',['payment'=>$data,'wallet'=>$wallet]);
            // else{
            //     return view('quotation',['payment'=>$data,'wallet'=>$wallet]);

            //     // return view('quotation',['payment'=>$data]);
            // }
                            return view('quotation',['payment'=>$data]);

        }
        else {
            return view('quotation',['payment'=>$data]);
        }
    }
}
