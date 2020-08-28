<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonorController extends Controller
{
    public function list($id){
//        dd(Auth::user()->id);
        $donatedList=Donation::where('user_id',Auth::user()->id);
        return view('/admin/list',compact('donatedList'));
    }

    public function donate(Request $request){
        $donate=new Donation();
        $donate->receiver=$request->receiver;
        $donate->user=$request->user;
        $donate->amount=$request->amount;
        $donate->save();

    }

}
