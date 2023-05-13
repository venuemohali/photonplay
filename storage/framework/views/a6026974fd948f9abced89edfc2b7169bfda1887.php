<?php
use App\Models\Product;
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

$productLists = Product::take(5)->get();

?>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets\customer\css\style.css')); ?>">
    <link href="<?php echo e(asset('assets\customer\css\bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets\customer\slick\slick.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets\customer\slick\slick-theme.css')); ?>" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<title>Photon Play</title>
</head>

<!-- <title>login</title> -->
<body>
<header class="header bg-white py-3">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="<?php echo e(asset('assets\customer\images\logo-dark.png')); ?>" alt="Not Found"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse header-font navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-5 gap-2 px-4">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercasen text-dark" href="<?php echo e(route('customer.homePage')); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-dark" href="<?php echo e(route('customer.radar.speed.signs')); ?>">THE SIGN</a>
                        </li>

                        <li class="nav-item dropdown position-relative solution-pos">
                            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                PRODUCTS
                            </a>
                            <ul class="dropdown-menu bg-light borderes">
                                <?php $__empty_1 = true; $__currentLoopData = $productLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <li><a class="dropdown-item text-dark px-lg-3 px-0 pb-4 pb-lg-3" href="<?php echo e(route('customer.radar.sign', $list->id)); ?>"><?php echo e($list->title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <?php endif; ?>

                            </ul>
                            <div class="position-absolute down-image">
                                <img src="<?php echo e(asset('assets\customer\images\Down-Arrow.png')); ?>" alt="Not Found">
                            </div>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-dark" href="<?php echo e(route('customer.contact.us')); ?>">CONTACT US</a>
                        </li>
                    </ul>
                    <form class="d-none  d-lg-flex header-side mt-lg-0 mt-4" role="search">
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->

                        <?php if(!Session::get('user')): ?>
                        <div class="d-flex align-items-center">
                        <input type="hidden" name="grand_total" value="<?php echo e($currency .''.$cartPrice); ?>">
                            <p class="me-2 mb-0"><?php echo e($currency .''.$cartPrice); ?></p>

                          <a href="<?php echo e(route('customer.shopping.bag')); ?>" <?php if($cartPrice == 0): ?> style="pointer-events: none" <?php endif; ?>>  <img src="<?php echo e(asset('assets\customer\images\shoping.png')); ?>" alt="Not Found" class="img-fluid me-5"></a>
                        </div>
                        <a href="<?php echo e(route('customer.loginForm')); ?>"> <img src="<?php echo e(asset('assets\customer\images\user.png')); ?>" alt="Not Found" class="img-fluid "> </a>
                        <?php else: ?>
                        <div class="d-flex align-items-center">
                            <p class="me-2 mb-0"><?php echo e($currency .''.$cartPrice); ?></p>
                            <a href="<?php echo e(route('customer.shopping.bag')); ?>" <?php if($cartPrice == 0): ?> style="pointer-events: none" <?php endif; ?>> <img src="<?php echo e(asset('assets\customer\images\shoping.png')); ?>" alt="Not Found" class="img-fluid me-5"></a>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="me-2">
                                <span class="text-capitalize">Good Day!</span>
                                <p class="text-capitalize mb-0"><?php echo e(Session::get('user')->name); ?></p>
                            </div>
                            <div class="profile-circle">

                                <div class="dropdown">
                                    <button
                                        class="btn dropdown-toggle"
                                        type="button"
                                        id="dropdownMenuButton"
                                        data-mdb-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        <a ><img src="<?php echo e(asset('assets\customer\images\profile.png')); ?>" alt="Not Found"
                                                 class="img-fluid rounded-circle d-block" width="36" height="36"></a>
                                    </button>
                                    <ul class="dropdown-menu position-absolute end-0" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="<?php echo e(route('customer.edit.profile')); ?>">Account</a></li>
                                        <li><a class="dropdown-item" href="<?php echo e(route('customer.logout')); ?>">Logout</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                    </form>
                </div>
            </div>
        </nav>
    </header>

<?php /**PATH C:\xampp\htdocs\photonplay\resources\views/customer/layouts/header.blade.php ENDPATH**/ ?>