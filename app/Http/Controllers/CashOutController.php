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
        $inputs['user_id']=auth()->user()->id;
        $cashin->insert($inputs);

        return redirect()->back()->with(["message"=>"Cash Out Successfull"]);
    }

    public function recent(){
        $trans= CashOut::OrderBy('created_at',"DESC")->get();
        return view("cash_out.recents",['transactions'=>$trans]);
    }
}
