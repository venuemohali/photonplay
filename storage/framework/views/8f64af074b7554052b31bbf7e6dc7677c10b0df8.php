<?php echo $__env->make('customer.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <div class="container-cus pt-lg-5 pt-3">
        <div class="login-sec">
            <div class="form-section p-3">
                <div class="d-flex form-section-inner">
                    <div class="login-parent">
                        <div class="login-parent-inner">
                            <h2 class="mb-lg-5 mb-4">Create new <br />password</h2>
                            <form action="<?php echo e(route('customer.change_password')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="email" value="<?php echo e($email); ?>">

                                <label for="">New Password</label>
                                <div class="input-group input-cus-group mb-4">
                                    <input type="password" name="password" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text">
                                        <img src="<?php echo e(asset('assets\customer\images\eye.png')); ?>" alt="eye" />
                                    </span>
                                </div>
                                <label for="">Repeat Password</label>
                                <div class="input-group input-cus-group mb-5">
                                    <input type="password" name="confirm_password" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text">
                                        <img src="<?php echo e(asset('assets\customer\images\eye.png')); ?>" alt="eye" />
                                    </span>
                                </div>
                                <button class="btn btn-primary w-100">Set Password</button>
                            </form>

                            <div class="mt-5">
                                <label class="d-block">have an account? <a href="<?php echo e(route('customer.loginForm')); ?>" class="text-colorr">Login here</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="slider d-none d-lg-block">
                        <div id="carouselExampleCaptions" data-bs-interval="false" data-bs-ride="false" data-bs-pause="hover" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    12
                                </div>
                                <div class="carousel-item">
                                    12
                                </div>
                                <div class="carousel-item">
                                    12
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/customer/auth/change_password_form.blade.php ENDPATH**/ ?>