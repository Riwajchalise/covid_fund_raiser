<?php

namespace App\Http\Controllers;

use App\Donation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonorController extends Controller
{
    //yo chai kk donate ko list
    public function donated()
    {
        if (Auth::user()->role_id === 2) {

            $donatedList = Donation::all()->where('user_id', '=', Auth::user()->id);
        } else {
            $donatedList = Donation::all();
        }
        return view('/donation', compact('donatedList'));
    }

    public function list()
    {

        $users = User::all()->where('role_id','=', 2);
        return view('/donor', compact('users'));
    }

    public function donate(Request $request)
    {
        $donate = new Donation();
        $donate->receiver = $request->receiver;
        $donate->user = $request->user;
        $donate->amount = $request->amount;
        $donate->save();
        return redirect('/donated/' . $donate->id);
    }

}
