@extends('layouts.admin')
@section('content')


    <table class="table mt-5">
        <thead>
        <tr>
            <td>S.No</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Email</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
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
