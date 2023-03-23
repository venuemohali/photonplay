<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="_____Name_____">
    <link rel="icon" src="{{ asset('assets/logo/fav.png') }}" type="image/x-icon">
    <link rel="shortcut icon" src="{{ asset('assets/logo/fav.png') }}" type="image/x-icon">
    <title>
        @yield('title')
    </title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    @include('layouts.css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\custome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\easy-tax.css') }}">

    @yield('style')

</head>

<body @if (Route::current()->getName() == 'index') onload="startTime()" @endif>
    @if (Route::current()->getName() == 'index')
        <div class="loader-wrapper">
            <div class="loader-index"><span></span></div>
            <svg>
                <defs></defs>
                <filter id="goo">
                    <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                    <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                    </fecolormatrix>
                </filter>
            </svg>
        </div>
    @endif
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('layouts.header')
        <!-- Page Header Ends  -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('layouts.sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                @yield('breadcrumb-title')
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb d-none d-md-flex">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}"> <i
                                                data-feather="home"></i></a></li>
                                    @yield('breadcrumb-items')
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                @yield('content')
                <!-- Container-fluid Ends-->
                @include('layouts.footer')
            </div>
            <!-- footer start-->


        </div>
    </div>
    <!-- latest jquery-->
    @include('layouts.script')
    <!-- Plugin used-->




    <!-- Easy Tax Java Script -->
    <script src="{{ asset('assets/js/easy-tax.js') }}"></script>


    @if (session('status'))

        <script>
            setTimeout(function() {
                notify.update('message',
                    '<i class="fa fa-bell-o"></i><strong>Message:</strong> {{ session('status') }}.');
            }, 500);
        </script>

    @endif

    <script type="text/javascript">
        if ($(".page-wrapper").hasClass("horizontal-wrapper")) {
            $(".according-menu.other").css("display", "none");
            $(".sidebar-submenu").css("display", "block");
        }



        function load_emails(search){
            $('#show_all_users').show();
            // Define the API endpoint URL
            const apiUrl = '{{route('admin.all_user_emails')}}';
            let searchb=search!=undefined?search.value:'';
            // Make an AJAX request to fetch the items
            $.ajax({
                url: apiUrl+"?search="+searchb,
                dataType: 'json',
                success: function(items) {
                    // Populate the dropdown with the items
                    let itm=items.emails;

                    const $multiSelect = $('#selectusers_multi');
                    $multiSelect.empty();
                    itm.forEach(item => {
                        $multiSelect.append(`<option value="${item.email}">${item.email}</option>`);
                    });

                },
                error: function() {
                    console.error('Failed to fetch emails from the API');

                }
            });
        }
        function remove_seleted_user(){
            $('#show_all_users').hide();
        }
        //
        // let i=0;
        // var j=0;
        // //more options in specialization
        // function more_options(k){
        //     i++;
        //     $('#dynamic_field_'+j).append('<div  id="row_'+i+'" class="row mb-3 form-group"> <div class="col-md-12">' +
        //         '<div class="row">'+
        //         '<div class="col-md-5">'+
        //         '<select id="row_id_'+i+'" name="row_'+i+'[]"  class="form-select form-select" aria-label=".form-select-sm">'+
        //     '<option selected disabled>--Option--</option>'+
        //     '<option>3 Days</option>'+
        //     '<option>5 Days</option>"'+
        //     '</select>'+
        //         '</div>'+
        //         '<div class="col-md-5">'+
        //     '<input type="text" class="form-control" placeholder="$">'+
        //     '</div>'+
        //     '<div class="col-md-2 p-1">'+
        //     '<a  onclick="more_options('+k+')" class="add btn btn-sm btn-dark">+ </a>'+
        //     '</div>'+
        //     '</div>'+
        //     '</div>' +
        //         '</div>');
        // }

    {{--    //more options in specialization--}}
    {{--    function more_sepcialization_options(){--}}
    {{--        j++;--}}
    {{--        $('#dynamic_field_main').append('<div id="row_specialization_'+j+'" class="row mb-3 form-group">'+--}}
    {{--            '<div class="col-md-8 mb-3">'+--}}
    {{--            '<select id="color" name="color" onchange="more_options()" class="form-select form-select" aria-label=".form-select-sm">'+--}}
    {{--            '<option selected disabled>-- Select Specification --</option>'+--}}
    {{--        @foreach($specializations as $category)--}}
    {{--        '<option value="{{$category->id}}"> {{$category->title}}</option>'+--}}
    {{--        @endforeach--}}
    {{--    '</select>'+--}}
    {{--        @error('color')--}}
    {{--      '<span class="invalid-feedback" role="alert">'+--}}
    {{--       ' <strong>{{ $message }}</strong>'+--}}
    {{--       '</span>'+--}}
    {{--        @enderror--}}
    {{--    '</div>'+--}}
    {{--     '<div class="col-md-2">'+--}}
    {{--      '<a  onclick="more_sepcialization_options()" class=" btn btn-primary">+</a>'+--}}
    {{--'</div>'+--}}
    {{--'<div id="dynamic_field_row_specialization_'+j+'">'+--}}
    {{--'</div>'+--}}
    {{--    '</div>');--}}
    {{--    }--}}

    </script>
{{--    <div id="a" class="row mb-3 form-group"> <div class="col-md-12">"+--}}
{{--            "<div class="row">"+--}}
{{--                "<div class="col-md-5">"+--}}
{{--                    "<select id="color" name="color" class="form-select form-select" aria-label=".form-select-sm">"+--}}
{{--                        "<option selected disabled>--Option--</option>"+--}}
{{--                        "<option>3 Days</option>"+--}}
{{--                        "<option>5 Days</option>"+--}}
{{--                        "</select>"+--}}
{{--                    "</div>"+--}}
{{--                "<div class="col-md-5">"+--}}
{{--                    "<input type="text" class="form-control" placeholder="$">"+--}}
{{--                    "</div>"+--}}
{{--                "<div class="col-md-2 p-1">"+--}}
{{--                    "<button  class="add btn btn-sm btn-dark">+ </button>"+--}}
{{--                    "</div>"+--}}
{{--                "</div>"+--}}
{{--            "</div>"+--}}
{{--        "</div>--}}


</body>

</html>
