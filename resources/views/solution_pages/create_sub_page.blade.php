@extends('user-master')

@section('title', 'Create Blog')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Model </h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Create/Edit Model</li>
    {{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create/Edit Model </h5>
                    </div>
                    <x-Admin.PageNavigator :page="1" :pid="1"/>

                    <div class="card-body ">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://stagingserver.photonplay.com/assets/customer/images/zero-mentence.png"  class="img-fluid"/>
                            </div>

                        <form method="POST" action="{{ url('/admin/blogs') }}"  enctype="multipart/form-data" >
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
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $data->description ?? ''}}" required autocomplete="description" autofocus>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="meta_title" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Meta Title') }}</label>

                                <div class="col-md-10">
                                    <input id="meta_title" type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" value="{{ old('meta_title') ?? $data->meta_title ?? ''}}" required autocomplete="meta_title" autofocus>

                                    @error('meta_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="cover_image" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Cover image') }}</label>

                                <div class="col-md-10">
                                    <input id="cover_image" type="file" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image" value="{{ old('cover_image') ?? $data->description ?? ''}}" required autocomplete="cover_image" autofocus>

                                    @error('cover_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="meta_keyword" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Meta Keyword') }}</label>

                                <div class="col-md-10">
                                    <input id="meta_keyword" type="text" class="form-control @error('meta_keyword') is-invalid @enderror" name="meta_keyword" value="{{ old('meta_keyword') ?? $data->description ?? ''}}" required autocomplete="meta_keyword" data-role="tagsinput" autofocus>

                                    @error('meta_keyword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="schema" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Schema') }}</label>

                                <div class="col-md-10">
                                    <textarea id="schema" type="text" class="form-control @error('schema') is-invalid @enderror" name="schema" required autocomplete="schema" autofocus>{{ old('schema') ?? $data->description ?? ''}}</textarea>

                                    @error('schema')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i data-feather="save"> </i>
                                        Save
                                    </button>
                                    <a href="{{url('admin/blogs')}}" class="btn btn-dark">
                                        <i data-feather="corner-down-right"> </i>
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
                placeholder: 'Hello Photon Play Systems',
                tabsize: 2,
                height: 500,
                // toolbar: [
                //     ['insert', ['picture']]
                // ],
                callbacks: {
                    onImageUpload: function(files) {
                        var formData = new FormData();
                        formData.append('photo', files[0]);
                        formData.append('_token', '{{ csrf_token() }}'); // Add CSRF token to the form data
                        $.ajax({
                            url: '{{ route('upload-photo-summernote') }}',
                            method: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(data) {
                                $('#summernote').summernote('insertImage', data.url);
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.error(textStatus + ': ' + errorThrown);
                            }
                        });
                    }
                }
            });
        });



    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <script>
        $(function () {
            $('input')
                .on('change', function (event) {
                    var $element = $(event.target);
                    var $container = $element.closest('.example');

                    if (!$element.data('tagsinput')) return;

                    var val = $element.val();
                    if (val === null) val = 'null';
                    var items = $element.tagsinput('items');

                    $('code', $('pre.val', $container)).html(
                        $.isArray(val)
                            ? JSON.stringify(val)
                            : '"' + val.replace('"', '\\"') + '"'
                    );
                    $('code', $('pre.items', $container)).html(
                        JSON.stringify($element.tagsinput('items'))
                    );
                })
                .trigger('change');
        });
    </script>

@endsection
