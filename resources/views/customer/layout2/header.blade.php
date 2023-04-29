<!doctype html>
<html>
<head>
    @php
        $currency = '$';
        $cartPrice = 0;
        if(!Session::get('user')){
            $cart = \DB::table('carts')->where('session_id', Session::getId())->get();
                foreach($cart as $i){
                    $cartPrice += $i->price * $i->quantity;
                }
        }else {
            $cart = \DB::table('carts')->where('user_id', Session::get('user')->id)->get();
                foreach($cart as $i){
                    $cartPrice += $i->price * $i->quantity;
                }
        }
    @endphp

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/customer/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/customer/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/assets/customer/slick/slick-theme.css" />
    <link rel="stylesheet" href="/assets/customer/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Home Page</title>

</head>
<body>
<div>
    <header class="header bg-white py-3">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="/assets/customer/images/logo-dark.png" alt="Not Found"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse header-font navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5 mx-4">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="{{route('customer.homePage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">COMPANY</a>
                        </li>

                        <li class="nav-item dropdown position-relative solution-pos">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                SOLUTIONS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('customer.solution.highway')}}">Solution Highway</a></li>
                                <li><a class="dropdown-item" href="{{route('customer.solution.tunnel')}}">Solution Tunnel</a></li>
                                <li><a class="dropdown-item" href="{{route('customer.solution.city')}}">Solution City</a></li>
                                <li><a class="dropdown-item" href="{{route('customer.solution.transit')}}">Solution Transit</a></li>

                            </ul>
                            <div class="position-absolute down-image">
                                <img src="{{asset('assets/customer/images/Down-Arrow.png')}}" alt="Not Found">
                            </div>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">NEWS & EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">CONTACT</a>
                        </li>
                    </ul>
                    <form class=" d-flex header-side mt-lg-0 mt-4 align-items-center" role="search">
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                        <div class="hease-user">
                            <!-- <div class="dropdown">
                                <button class="btn dropdown-toggle border-0 shadow-none p-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/assets/customer/images/user.png" alt="Not Found" class="img-fluid me-5">
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-capitalize" href="#">Profile</a></li>
                                    <li><a class="dropdown-item text-capitalize py-3" href="#">Change Password</a></li>
                                    <li><a class="dropdown-item text-capitalize" href="#">Log Out</a></li>
                                </ul>
                            </div> -->
                        </div>
                        <img src="{{asset('assets/customer/images/search.png')}}" alt="Not Found" class="img-fluid" width="18px"
                             height="18px">
                    </form>
                </div>
            </div>
        </nav>
    </header>
</html>
