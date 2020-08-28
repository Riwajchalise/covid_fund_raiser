<?php

namespace App\Http\Controllers;

use App\Receiver;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;

use Illuminate\Support\Facades\Mail;


class MainController extends Controller
{
    function index()
    {
     return view('login');
    }

    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('main/successlogin');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    function successlogin()
    {
        $receivers=Receiver::all();
     return view('successlogin',compact('receivers'));
    }

    //Function for logging-out
    function logout()
    {
        Auth::logout();
        return redirect('');
    }

    function registerAsDonor(Request $request){
        // dd($request->input());

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->role_id="2";
        $user->password= Hash::make($request->password);
//        $user->RoleId=
        $user->save();

        return redirect('/registrationMail/'.$user->id);
    }

    function register(){
        return view('/registerAsDonor');
    }

    function requestFund(){
        return view('/registerAsReceiver');
    }
}

