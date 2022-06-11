<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\listing;

class listingController extends Controller
{
    //
    public function index(){
        $data = listing::find();
        return view('index',['listing'=>$data]);
    }
}
