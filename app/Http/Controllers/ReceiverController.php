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
        $reciever->type=$request->type;
        $reciever->approval='pending';
        $reciever->save();
        return redirect('/');
    }

    public function update(Request $request){
        $reciever=Receiver::find($request->id);
        $reciever->approval=$request->approval;
        $reciever->save();
    }


}
