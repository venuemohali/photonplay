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

                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Pricing</h6>
                                    </div>
                                    <hr/>
                                    <form method="POST" action="#">
                                        @csrf

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="category" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Cover Image') }}</label>

                                            <div class="col-md-3">
                                                <input type="file" name="cover_image" class="form-control" >

                                                @error('category_selected')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Upload') }}
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
