@extends('user-master')

@section('title', 'Create Blog')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Blog </h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Blog </li>
    {{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> New Blog  </h5>
                    </div>

                    <div class="card-body ">
                        <form method="POST" action="{{ url('/admin/blogs') }}" >
                            @csrf
                            <div class="row mb-3 form-group">
                                <label for="title" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Title') }}</label>

                                <div class="col-md-10">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $data->title ?? ''}}" required autocomplete="title" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="description" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Description') }}</label>

                                <div class="col-md-10">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus>{{ old('description') ?? $data->description ?? ''}}</textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="keywords" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Keywords') }}</label>

                                <div class="col-md-10">
                                    <textarea id="keywords" type="text" class="form-control @error('keywords') is-invalid @enderror" name="keywords" required autocomplete="keywords" autofocus>{{ old('keywords') ?? $data->keywords ?? ''}}</textarea>

                                    @error('keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="author" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Author') }}</label>

                                <div class="col-md-10">
                                    <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') ?? $data->author ?? ''}}" required autocomplete="author" autofocus>

                                    @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="image" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Image') }}</label>

                                <div class="col-md-10">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') ?? $data->image ?? ''}}" required autocomplete="image" autofocus>

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="category" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Category') }}</label>

                                <div class="col-md-10">

                                    <select id="category" name="category_selected" class="form-select form-select" aria-label=".form-select-sm">
                                        <option selected disabled>--Select Category--</option>
                                        @foreach($blog_categories as $category)
                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach

                                    </select>

                                    @error('category_selected')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="summernote" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Editor') }}</label>

                                <div class="col-md-10">
                                    <textarea id="summernote"  type="text" class="form-control @error('keywords') is-invalid @enderror" name="body" required autocomplete="body" autofocus>{{ old('body') ?? $data->body ?? ''}}</textarea>

                                    @error('keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                    <a href="{{url('admin/blog-categories')}}" class="btn btn-dark">
                                        Return Back
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Hello Bootstrap 4',
                tabsize: 2,
                height: 100
            });
        });
    </script>
@endsection
