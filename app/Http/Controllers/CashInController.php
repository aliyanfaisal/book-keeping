<?php

namespace App\Http\Controllers;

use App\Models\CashIn;
use Illuminate\Http\Request;

class CashInController extends Controller
{
    //

    public function index(Request $req){
        return view("cash_in.index");
    }


    public function post(Request $req){

        $cashin= new CashIn();
        $inputs= $req->input();
        unset($inputs['_token']);
        $cashin->insert($inputs);

        return redirect()->back()->with(["message"=>"Cash in Successfull"]);
    }
}

