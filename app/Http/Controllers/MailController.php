<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function registration($id){
        $user=User::find($id);
        Mail::send('layouts.requestMail', $user, function($message) use ($user){
            $message->to($user->email)->subject('Registration Completed!');
            $message->from('shreya998.ss@gmail.com','Covid Funds');
        });
        return redirect('/login');
    }
}
