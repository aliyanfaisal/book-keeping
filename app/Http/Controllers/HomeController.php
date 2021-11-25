<?php

namespace App\Http\Controllers;

use App\Models\CashIn;
use App\Models\CashOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $trans["cashins"]= CashIn::where("user_id",Auth::user()->id)->limit(10)->get();
        $trans['cashouts']= CashOut::where('user_id', Auth::user()->id)->limit(10)->get();
        return view('home', ["transactions"=>$trans]);
    }
}
