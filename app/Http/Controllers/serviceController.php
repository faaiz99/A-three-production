<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class serviceController extends Controller
{
    //
    public function index(){
        $data = service::all();
        return view('services',['services'=>$data]);
    }

    public function payment(Request $request, $id){
        $data = service::find($id);
        return view('quotation',['payment'=>$data]);
    }
}
