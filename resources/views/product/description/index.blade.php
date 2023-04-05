@extends('user-master')

@section('title', 'Welcome to Photon Play')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Detail Descriptions</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Detail Descriptions</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Descriptions</h5>
                        <hr/>
                        <x-Product.HeaderMenu :page="5" :pid="$product->id"/>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Details</h6>
                                    </div>
                                    <hr/>

                                    <form method="POST" action="{{route('admin.product_description_store')}}" >
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}">

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="meta_description" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Description') }}</label>

                                            <div class="col-md-8">
                                                <textarea  id="summernote"  name="description" class="form-control summernote"  >{{ old('description') ??  $product->description ?? ''}}</textarea>

                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="specification" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Specification') }}</label>

                                            <div class="col-md-8">
                                                <textarea  id="specification"  name="specification" class="form-control summernote"  >{{ old('specification') ??  $product->specification ?? ''}}</textarea>

                                                @error('specification')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="feature" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Feature') }}</label>

                                            <div class="col-md-8">
                                                <textarea   id="feature"  name="feature" class="form-control summernote"  >{{ old('feature') ??  $product->feature ?? ''}}</textarea>

                                                @error('feature')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="power_option" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Power Option') }}</label>

                                            <div class="col-md-8">
                                                <textarea   id="power_option"  name="power_option" class="form-control summernote"   >{{ old('power_option') ??  $product->power_option ?? ''}}</textarea>

                                                @error('meta_keywords')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="visibility" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Visibility') }}</label>

                                            <div class="col-md-8">
                                                <textarea  id="summernote"  name="visibility" class="form-control summernote" >{{ old('visibility') ??  $product->visibility ?? ''}}</textarea>

                                                @error('visibility')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="ideal_for" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Ideal for') }}</label>

                                            <div class="col-md-8">
                                                <textarea  id="ideal_for" name="ideal_for" class="form-control summernote" >{{ old('ideal_for') ??  $product->ideal_for ?? ''}}</textarea>

                                                @error('ideal_for')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="row ">
                                            <div class="col-md-12 d-flex justify-content-center ">
                                                <button type="submit" class="btn btn-primary d-flex align-items-center">
                                                    <i data-feather="save"> </i>
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
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Hello Photon Play Systems',
                tabsize: 2,
                height: 200
            });

        });

    </script>




@endsection