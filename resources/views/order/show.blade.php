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
                    <div class="card-header d-flex justify-content-around">
                        <h5 class="card-title shadow-lg p-2">Order : {{$order->order_number}}</h5>
                        <h5  > <span class="{{$order->payment_status=='paid'?'bg-success':'bg-warning'}} p-2">
                                    {{ucfirst($order->payment_status)}}</span>  </h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">

                            <h2> </h2>

                            <table class="table table-bordered">
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
                                        <td>{{ $prod->option_ids }}</td>
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

                            <table class="table table-bordered">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- All Client Table End -->



@endsection

@section('script')

@endsection
