<?php

namespace App\Http\Controllers;

use App\Receiver;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReceiverController extends Controller
{
    public function store(Request $request){
        $reciever=new Receiver();
        $reciever->country=$request->country;
        $reciever->phone=$request->phone;
        $reciever->name=$request->name;
        $reciever->amount=$request->amount;
        $reciever->description=$request->description;
        // $reciever->type=$request->type;
        $reciever->type="na";
        $reciever->email=$request->email;
        $reciever->approval='pending';
        $reciever->save();
        return redirect('/requestAid/'.$reciever->id);
    }

    public function update(Request $request){
//        dd($request);
        $reciever=Receiver::find($request->id);
        $reciever->approval=$request->approval;
        $reciever->save();

        if($reciever->approval=='Approved'){
            Mail::send('layouts.approvedMail', $reciever->toArray(), function($message) use ($reciever){
                $message->to($reciever->email)->subject('Your Request Has Been Approved!');
                $message->from('shreya998.ss@gmail.com','Covid Funds');
            });
            return response()->json('hey');
        }
        else{
            Mail::send('layouts.approvedMail', $reciever->toArray(), function($message) use ($reciever){
                $message->to($reciever->email)->subject('Your Request Has Been Rejected!');
                $message->from('shreya998.ss@gmail.com','Covid Funds');
            });
            return redirect('/rejectedMail/'.$reciever->id);
        }
    }


}
