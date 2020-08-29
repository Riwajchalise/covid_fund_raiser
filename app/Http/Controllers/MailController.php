<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Receiver;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function registration($id){
        $user=User::find($id);
        Mail::send('layouts.registerMail', $user->toArray(), function($message) use ($user){
            $message->to($user->email)->subject('Registration Completed!');
            $message->from('shreya998.ss@gmail.com','Covid Funds');
        });
        return redirect('/login');
    }

    public function requestAid($id){
        $user=User::find($id);
        Mail::send('layouts.requestMail', $user->toArray(), function($message) use ($user){
            $message->to($user->email)->subject('Your Request Has Been Recorded!');
            $message->from('shreya998.ss@gmail.com','Covid Funds');
        });
        return redirect('/');

    }

    public function approved($id){
        $user=User::find($id);
        Mail::send('layouts.approvedMail', $user->toArray(), function($message) use ($user){
            $message->to($user->email)->subject('Your Request Has Been Approved!');
            $message->from('shreya998.ss@gmail.com','Covid Funds');
        });
        return response()->json('hey');
    }

    public function rejected($id){
        $user=User::find($id);
        Mail::send('layouts.approvedMail', $user->toArray(), function($message) use ($user){
            $message->to($user->email)->subject('Your Request Has Been Rejected!');
            $message->from('shreya998.ss@gmail.com','Covid Funds');
        });
        return redirect('/main/checklogin');
    }

    public function donated($id){
        $user=Donation::find($id);
        $data = array('receiver'=>$user->receiver->name,'donor'=>$user->user->name);
        Mail::send('layouts.gratitudeMail', $data, function($message) use ($user){
            $message->to($user->user->email)->subject('Thanks for your help!');
//            $message->to($user->receiver->email)->subject('Help Completed!');
            $message->from('shreya998.ss@gmail.com','Covid Funds');
        });
        Mail::send('layouts.donatedMail', $data, function($message) use ($user){
            $message->to($user->receiver->email)->subject('Your request has been answered!');
            $message->from('shreya998.ss@gmail.com','Covid Funds');
        });
        return redirect('/main/checklogin');
    }
}
