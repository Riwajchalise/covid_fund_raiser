<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonorController extends Controller
{
    //yo chai kk donate ko list
    public function donated(){
        //auth halera admin ho bhaney sab donation natra usley garya matra
        //id auth bata liney
//        dd(Auth::user()->id);
        $donatedList=Donation::where('user_id',Auth::user()->id);
        return view('/donations',compact('donatedList'));
    }

    public function list(){
        $donors=User::where('role_id',2);
        return view('/donor',compact('donors'));
    }

    public function donate(Request $request){
        $donate=new Donation();
        $donate->receiver=$request->receiver;
        $donate->user=$request->user;
        $donate->amount=$request->amount;
        $donate->save();

    }

}
