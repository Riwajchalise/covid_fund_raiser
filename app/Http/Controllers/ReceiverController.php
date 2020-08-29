<?php

namespace App\Http\Controllers;

use App\Receiver;
use Illuminate\Http\Request;

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
            return redirect('/approvedMail/'.$reciever->id);
        }
        else{
            return redirect('/rejectedMail/'.$reciever->id);
        }
    }


}
