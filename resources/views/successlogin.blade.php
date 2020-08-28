@extends('layouts.admin')
@section('content')


    <h3 class="text-center mt-5">People that need your Assistance</h3>

    <table class="table">
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
                    <div class="col-md-3">
                        <form method="post" action="{{url('/request/update')}}">
                            <input type="hidden" value="{{$receiver->id}}" name="id">
                            <select name="approval">
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </div>
{{--
             <a href="{{url('/')}}"></a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function () {

            $('.table').dataTable();
        });
    </script>
@endsection
