<?php

namespace App\Http\Controllers;

use App\Models\CashIn;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $inputs['user_id']=Auth::user()->id;
        $cashin->insert($inputs);

        return redirect()->back()->with(["message"=>"Cash in Successfull"]);
    }

    public function recent(){
        $trans= CashIn::OrderBy('created_at',"DESC")->get();
        return view("cash_in.recents",['transactions'=>$trans]);
    }
}

