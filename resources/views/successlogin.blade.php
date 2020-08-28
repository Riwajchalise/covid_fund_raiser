@extends('layouts.admin')
@section('content')

{{--    //if role is donor--}}
    <table>
        <thead>
        <tr>
            <td>S.No</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Country</td>
            <td>Description</td>
            <td>Amount</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($receivers as $receiver)
            <tr>
                <td>{{$loop->iterator()}}</td>
                <td>{{$receiver->name}}</td>
                <td>{{$receiver->phone}}</td>
                <td>{{$receiver->country}}</td>
                <td>{{$receiver->description}}</td>
                <td>{{$receiver->amount}}</td>
                <td class="row">
{{--                    <a href="{{url('/')}}"></a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
