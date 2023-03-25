@extends('user-master')

@section('title', 'Welcome To Easy Returns Dashboard')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Media</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Media</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Media</h5>
                       <hr/>
                        <x-Product.HeaderMenu :page="2" :pid="$product->id"/>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Media</h6>
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

                                            <div class="col-md-4">
                                                <div style="height: 300px;width: 300px;">
                                                    <img src="http://stagingserver.photonplay.com/assets/customer/images/Product-sign.png" class="w-100"
                                                </div>
                                            </div>

                                        </div>


                                    </form>

                                    <form method="POST" action="#">
                                        @csrf

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="moreimage" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('More Images') }}</label>

                                            <div class="col-md-6">
                                                <input  id="moreimage" type="file" name="more_images[]" class="form-control" multiple >

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
                                            @for($i=0;$i<5;$i++)


                                            <div class="col-md-3 m-3">
                                                <div style="height: 300px;width: 300px;">
                                                    <img src="http://stagingserver.photonplay.com/assets/customer/images/Product-sign.png" class="w-100"/>
                                                </div>
                                            </div>
                                            @endfor
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


    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Hello Photon Play Systems',
                tabsize: 2,
                height: 200
            });

        });

    </script>
@endsection
