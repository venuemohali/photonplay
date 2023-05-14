@extends('user-master')

@section('title', 'Manage contact us')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Manage Contact us</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Contact Us</li>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">All Contact/Inquiry</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Company Name</th>
                                    <th>Country</th>
                                    <th>Subject</th>
                                    <th>Email </th>
                                    <th>Phone</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($records as $item)
                                    <tr id="Item-{{$item->id}}">
                                        <td>{{$Sr++}}</td>
                                        <td>{{$item->coupon_name}}</td>
                                        <td>{{$item->value }}{{$item->type==1?"$":"%"}}</td>
                                        <td>{{$item->status==1?"Active":"Expired"}}</td>
                                        <td>{{$item->expiry_date}}</td>
                                        <td>
                                            <a href="{{route('admin.coupons.edit', $item->id)}}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                                <i data-feather="edit"></i>
                                            </a>
                                            <a id="Delete-{{$item->id}}" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                                                <i data-feather="trash-2"></i>
                                            </a>
                                            <script>
                                                $('#Delete-{{$item->id}}').click(function(){
                                                    console.log("hello");
                                                    Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: "You won't be able to revert this!",
                                                        icon: 'question',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Yes, delete it!'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            $.ajaxSetup({
                                                                headers: {
                                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                }
                                                            });

                                                            $.ajax({
                                                                type:'DELETE',
                                                                url:'{{url('admin/coupons/'.$item->id)}}',
                                                                data:'_token = {{ @csrf_token() }}',
                                                                success:function(data) {
                                                                    $("#Item-{{$item->id}}").hide();
                                                                }
                                                            });

                                                        }
                                                    });
                                                });
                                            </script>
                                        </td>
                                    </tr>
                                @endforeach
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
