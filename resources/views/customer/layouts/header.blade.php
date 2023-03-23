<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets\customer\css\style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\customer\css\style2.css') }}">
    <link href="{{ asset('assets\customer\css\bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\customer\slick\slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\customer\slick\slick-theme.css') }}" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</head>
<title>Photon Play</title>
</head>

<!-- <title>login</title> -->

<header class="header bg-white py-3">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets\customer\images\logo-dark.png') }}" alt="Not Found"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse header-font navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-5">
                    <li class="nav-item">
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{route('customer.radar.speed.signs')}}">THE SIGN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="/radar-sign">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="/">CONTACT US</a>
                    </li>

                </ul>
                <form class="d-flex header-side mt-lg-0 mt-4" role="search">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <div class="d-flex align-items-center">
                        <p class="me-2 mb-0">$1000.00</p>
                        <img src="{{ asset('assets\customer\images\shoping.png') }}" alt="Not Found" class="img-fluid me-5">
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-2">
                            <span class="text-capitalize">Good Day!</span>
                            <p class="text-capitalize mb-0">User name</p>
                        </div>
                        <div class="profile-circle">
                            <a href="/">
                            <img src="{{ asset('assets\customer\images\profile.png') }}" alt="Not Found" class="img-fluid rounded-circle d-block" width="36" height="36">
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>

</head>

<body>
    @notifyCss
    @include('notify::components.notify')
    <x:notify-messages />
    @notifyJs

</body>

</html>
