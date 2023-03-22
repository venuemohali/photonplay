@extends('user-master')

@section('title', 'Welcome To Easy Returns Dashboard')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Add Specilization</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Add Product</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>New Product</h5>
                        <div class="row">

                            <div class="col-md-3 mb-3">
                                <a href="#" class="btn btn-info w-100" >Options </a>
                            </div>

                            <div class="col-md-3 mb-3">
                                <a href="#" class="btn btn-info w-100" >Images </a>
                            </div>

                            <div class="col-md-3 mb-3">
                                <a href="#" class="btn btn-info w-100"  > Shipping </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="#" class="btn btn-info w-100"> Vat/Tax </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Colors</h6>
                                    </div>
                                    <form method="POST" action="{{route('admin.product.store')}}">
                                        @csrf

                                        <div class="row mb-3 form-group">
                                            <label for="title" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Colors') }}</label>

                                            <div class="col-md-10  ">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Yellow
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Red
                                                    </label>
                                                </div>

                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                   <div class="col-md-12 mb-3">
                                       <div class="border-2 shadow-lg p-4">
                                           <div class="col-md-12 ">
                                               <h6> Product Specifications</h6>
                                           </div>

                                           <div class="row mb-3 form-group">
                                               <div class="col-md-8">

                                                   <select id="color" name="color" class="form-select form-select" aria-label=".form-select-sm">
                                                       <option selected disabled>-- Select Specification --</option>
                                                    @foreach($specializations as $category)
                                                           <option value="{{$category->id}}"> {{$category->title}}</option>
                                                    @endforeach



                                                   </select>

                                                   @error('color')
                                                   <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                   @enderror
                                               </div>
                                               <div class="col-md-2">
                                                        <a id="add" onclick="more_options()" class=" btn btn-primary">+</a>
                                               </div>

                                               <div id="dynamic_field">

                                               </div>
                                           </div>



                                       </div>
                                   </div>


                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Add Product') }}
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
            $('#summernote').summernote({
                placeholder: 'Hello Photon Play Systems',
                tabsize: 2,
                height: 200
            });

        });

        function more_options(){
            i++;
            $('#dynamic_field').append('<div id="'+i+''" class="row mb-3 form-group">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-5">
                <select id="color" name="color" class="form-select form-select" aria-label=".form-select-sm">
                <option selected disabled>--Option--</option>
            <option>3 Days</option>
            <option>5 Days</option>

        </select>

        </div>
            <div class="col-md-5">
                <input type="text" class="form-control" placeholder="$">
            </div>

            <div class="col-md-2 p-1">
                <button  class="add btn btn-sm btn-dark">+ </button>
            </div>
        </div>
        </div>
        </div>d><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        }
    </script>
@endsection
