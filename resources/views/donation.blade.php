@extends('layouts.admin')
@section('content')

    <h3 class="mt-5 text-center">All Donations</h3>
    <table class="table mt-5">
        <thead>
        <tr>
            <td>S.No</td>
            <td>Donor</td>
            <td>Donated To</td>
            <td>Amount</td>
        </tr>
        </thead>
        <tbody>
        @foreach($donatedList as $donation)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    {{$donation->user->name}}
                </td>
                <td>
                    {{$donation->receiver->name}}
                </td>
                <td>{{$donation->amount}}</td>
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
