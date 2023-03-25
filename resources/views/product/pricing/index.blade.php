@extends('user-master')

@section('title', 'Pricing')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Pricing</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Pricing</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Pricing</h5>
                        <hr/>
                        <x-Product.HeaderMenu :page="3" :pid="$product->id"/>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Pricing</h6>
                                    </div>
                                    <hr/>
                                    <form method="POST" action="#">
                                        @csrf

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="cost_price" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Cost Price') }}</label>

                                            <div class="col-md-8">
                                                <input type="text" name="cost_price" class="form-control" placeholder="$$$" >

                                                @error('cost_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="retail_price" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Retail Price') }}</label>

                                            <div class="col-md-8">
                                                <input type="text" name="retail_price" class="form-control" placeholder="$$$" >

                                                @error('retail_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="discount" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Discount') }}</label>

                                            <div class="col-md-8">
                                                <input type="text" name="discount" class="form-control" placeholder="%">

                                                @error('discount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="retail_price" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Pricing Type') }}</label>

                                            <div class="col-md-8">
                                                <select  name="pricing_type" class="form-select" >
                                                    <option value="Normal"> Normal </option>
                                                    <option value="Sale"> Sale </option>
                                                </select>

                                                @error('retail_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row ">
                                            <div class="col-md-12 d-flex justify-content-center ">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Save') }}
                                                </button>
                                            </div>
                                        </div>


                                    </form>

                                </div>

                            </div>
                            <div class="col-md-6 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Quantity</h6>
                                    </div>
                                    <hr/>
                                    <form method="POST" action="#">
                                        @csrf

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="quantity" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Quantity') }}</label>

                                            <div class="col-md-8">
                                                <input type="text" name="quantity" class="form-control" placeholder="500" >

                                                @error('cost_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="minimum_limit" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Minimum Limit') }}</label>

                                            <div class="col-md-8">
                                                <input type="text" name="minimum_limit" class="form-control" placeholder="50" >

                                                @error('minimum_limit')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-md-12 d-flex justify-content-center ">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Save') }}
                                                </button>
                                            </div>
                                        </div>


                                    </form>

                                </div>

                            </div>
                        </div>







                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
