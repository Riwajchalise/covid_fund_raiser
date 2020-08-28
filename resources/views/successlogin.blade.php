@extends('layouts.admin')
@section('content')

    @if (Auth::user()->role_id == 1)
        I AM ADMIN
    @else


    <h3 class="text-center mt-5">People that need your Assistance</h3>

    <table class="table">
        <thead>
        <tr>
            <td>S.No</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Country</td>
            <td>Description</td>
            <td>Status</td>
            <td>Amount</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($receivers as $receiver)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$receiver->name}}</td>
                <td>{{$receiver->phone}}</td>
                <td>{{$receiver->country}}</td>
                <td>{{$receiver->description}}</td>
                <td>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width:{{$percentList[$loop->iteration-1]}}%">
                            <span class="sr-only">{{$percentList[$loop->iteration-1]}}% Complete</span>
                        </div>
                    </div>
                </td>
                <td>{{$receiver->amount}}</td>
                <td>
                    @if(\Illuminate\Support\Facades\Auth::user())

                            <select name="approval" data-id="{{$receiver->id}}" class="approvedStatus">
                                <option value="pending" @if($receiver->approval=='pending')selected@else @endif>Pending</option>
                                <option value="Approved" @if($receiver->approval=='Approved')selected@else @endif>Approved</option>
                                <option value="Rejected" @if($receiver->approval=='Rejected')selected@else @endif>Rejected</option>
                            </select>
{{--                            {{csrf_field()}}--}}
{{--                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>--}}
{{--                        </form>--}}
                    @else
                        <button id="payment-button">Pay with Khalti</button>
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        $('.approvedStatus').change(function(){
            let id=$(this).attr('data-id');
            let value=$(this).children("option:selected"). val();
            console.log(value)
            console.log(id)
            let fd=new FormData();
            fd.append('id',id);
            fd.append('value',value);
            fd.append('_token', "{{csrf_token()}}");
            fd.append('method','PATCH');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
                }
            });
            $.ajax({
                type: 'PATCH',
                url:"{{url('/request/update')}}",
                data: fd,
                processData: false,
                contentType: false,
                success: function (data) {
                    window.location.reload();
                    console.log(data)
                },
                error: function (data) {
                    // window.location.reload();
                    console.log(data);

                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.table').dataTable();
        });
    </script>
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "MOBILE_BANKING",
                "KHALTI",
                "EBANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {

            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>
    @endif
@endsection
