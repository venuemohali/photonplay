@php
use App\Models\ProductSpcializationOption;
@endphp
@extends('user-master')

@section('title', 'Show Orders')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Show Orders</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Show Orders</li>
@endsection

@section('content')
    <div class="container-fluid">



        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title p-1 d-flex justify-content-around align-items-center m-2 p-2">
                            <span>   Order : {{$order->order_number}}</span>
                            <span>
                            <form id="myForm">
                                    @csrf
                                <select class="form-select" id="myForm"  shadow-none m-2">
                                    <option value="out for delivery">Out for delivery</option>
                                    <option value="delevered">Delivered</option>
                                    <option value="delivery delayed">Delivery delayed</option>
                                    <option value="delivery cancelled">Delivery cancelled</option>
                                </select>
                            </form>

                            </span>
                        </h4>
                        <div class="shadow-sm p-3">
                        <p> Payment Status : <span class="{{$order->payment_status=='paid'?'text-success':'text-warning'}} p-1">
                                    {{ucfirst($order->payment_status)}} </span>   </p>

                        <p> Trasaction No. : <span>
                                {{$order->trx_id}}</span> </p>
                        <p>  <b> Order Note: </b>  {{$order->order_notes??'Order notes not available.'}}</p>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="dt-ext table-responsive">

                            <h2> </h2>
                            <div class="shadow-lg p-4 ">
                                <h2> Product </h2>
                                <hr/>
                            <table class="table table-bordered  table-hover">
                                <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Options</th>
                                    <th>Quantity</th>
                                    <th>Price</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->orderedProducts as $prod)
                                    <tr>
                                        <td>{{ $prod->product_id }}</td>
                                        <td><img src="{{asset("storage/".$prod->cover_image)}}" alt="Image not found" /></td>
                                        <td>{{ $prod->title }}</td>
                                        <td>
                                            @foreach (explode(',',$prod->option_ids) as $option)
                                                @php
                                                $options = ProductSpcializationOption::with('specializationoptions','product_specilization.specilization')->where('specialization_option_id', $option)->get();

                                                @endphp
                                                @foreach ($options as $opp)
                                                    {{$opp->product_specilization->specilization->title}} : {{$opp->specializationoptions->option}}(${{$opp->specialization_price}}) <br>
                                                @endforeach
                                            @endforeach

                                        </td>
                                        <td>{{ $prod->quantity }}</td>
                                        <td>${{$prod->price}}/-</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td>

                                    </td>
                                    <td colspan="4">
                                    </td>
                                    <td>
                                        ${{$order->grand_total}} /-
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                            <br/>

                            <div class="shadow-lg p-4 ">
                                <h2> Customer </h2>
                                <hr/>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>Stripe Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>


                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>{{$order->user->id }}</td>
                                        <td>{{$order->user->stripe_id}}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ $order->user->email }}</td>
                                        <td>{{ $order->user->phone_number }}</td>
                                    </tr>

                                </tbody>
                            </table>
                            </div>
                            <br/>
                            <div class="shadow-lg p-4 ">
                                <h2> Billing Address </h2>
                                <hr/>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Billing Street</th>
                                        <th>Billing Flat Suite</th>
                                        <th>Billing City</th>
                                        <th>Billing State</th>
                                        <th>Billing Countryr</th>
                                        <th>Billing Postcode</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$order->billing_street }}</td>
                                        <td>{{$order->billing_flat_suite}}</td>
                                        <td>{{ $order->billing_city }}</td>
                                        <td>{{ $order->billing_state}}</td>
                                        <td>{{ $order->billing_country }}</td>
                                        <td>{{ $order->billing_postcode }}</td>
                                    </tr>


                                    </tbody>
                                </table>
                                <div class="shadow-sm p-3">
                                    <p>  <b> Address Note: </b>  {{$order->address}}</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Client Table End -->



@endsection

@section('script')

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

$('#myForm').on('click', function() {
    console.log('hello');
    // if ($(this).prop("checked") == true) {
    //     var checked = true;

    // } else if ($(this).prop("checked") == false) {
    //     var checked = false;

    // }
    // var headers = {
    //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    // };
    // var data = {

    //     'id': $(this).val(),
    //     "status": checked

    // };
    // console.log(data);
    // {{-- $.ajax({
    //        type:'POST',
    //        url:'{{route('admin.product.visibility')}}',
    //        headers: headers,
    //        data:data,
    //        success:function(data) {
    //         //
    //         }
    // }); --}}
});
</script>

