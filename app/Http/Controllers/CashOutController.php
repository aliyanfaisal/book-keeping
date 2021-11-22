<?php

namespace App\Http\Controllers;

use App\Models\CashOut;
use Illuminate\Http\Request;

class CashOutController extends Controller
{
    //
    public function index(){
        return view('cash_out.index');
    }

    public function post(Request $req){

        $cashin= new CashOut();
        $inputs= $req->input();
        unset($inputs['_token']);
        $cashin->insert($inputs);

        return redirect()->back()->with(["message"=>"Cash Out Successfull"]);
    }
}
