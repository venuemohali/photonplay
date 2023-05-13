<?php echo $__env->make('customer.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- header-end -->
    <!-- Tabber-start -->
    <section class="stepper-form-tabber pt-3 pb-0 bg-white">
        <div>
            <ul class="d-flex justify-content-center justify-content-md-between tabber-list-container flex-wrap">
                <li>01 SHOPPING BAG <span class="d-block">Manage Your Items List</span></li>
                <li>02 SHIPPING AND CHECKOUT <span class="d-block">Checkout your items list</span></li>
                <li <?php if(Request::is('confirmation')): ?> class="active" <?php endif; ?>>03 CONFIRMATION<span class="d-block">Review and submit Your order</span></li>
            </ul>
        </div>
    </section>
    <section class="step-form  py-0">
        <div class="container">
            <div class="row justify-content-center mt-5 pt-5">
                <div class="col-lg-9 border-bottom border-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="py-4 border-top border-bottom">
                                <p class="text-center mb-0 text-success">Thank you. Your order has been received.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product-delievery  border-bottom border-0">
                                <ul
                                    class="product-delievery__ d-flex flex-wrap justify-content-center align-items-center p-0 m-0">
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">Order no</span>
                                        <span class="text-uppercase"><?php echo e($orders->order_number); ?></span>
                                    </li>
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">date</span>
                                        <span class="text-uppercase"><?php echo e(date('M-d-Y',strtotime($orders->created_at))); ?></span>
                                    </li>
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">total</span>
                                        <span class="text-uppercase">$<?php echo e($orders->grand_total); ?></span>
                                    </li>
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">Payment Method</span>
                                        <span class="text-uppercase">Online</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="payment-details bg-white p-3 pb-4 h-100">
                                <h3 class="text-uppercase">our order</h3>
                                <ul class="order-details p-0 mb-5">
                                    <?php $__currentLoopData = $orders->orderedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="d-flex justify-content-between py-3">
                                        <span class="text"><?php echo e($product->product->title); ?> x <?php echo e($product->quantity); ?> </span>
                                        <span class="text-amount">$<?php echo e($product->price); ?></span>
                                    </li> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <li class="d-flex justify-content-between py-3">
                                        <span class="text text-capitalize">Cart Subtotal</span>
                                        <span class="text-amount">$<?php echo e($orders->cart_subtotal); ?></span>
                                    </li>
                                    <li class="d-flex justify-content-between py-3">
                                        <span class="text text-capitalize"> Shipping and Handing</span>
                                        <span class="text-amount">$<?php echo e($orders->shipping); ?></span>
                                    </li>
                                    <li class="d-flex justify-content-between py-3">
                                        <span class="text text-capitalize">GST</span>
                                        <span class="text-amount">$<?php echo e($orders->gst); ?></span>
                                    </li>
                                    <?php if($orders->discounted_amount != 0): ?>
                                    <li class="d-flex justify-content-between py-3">
                                        <span class="text text-capitalize">Discount</span>
                                        <span class="text-amount text-danger">$<?php echo e($orders->discounted_amount); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <li class="d-flex justify-content-between py-3 active">
                                        <span class="text text-capitalize fw-bold">Order total</span>
                                        <span class="text-amount">$<?php echo e($orders->grand_total); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-coupon bg-white p-3 pt-4 pb-0 h-100">
                                <h3 class="text-uppercase">Billing Details</h3>
                                <ul class="order-details p-0 mb-5">
                                    <li class="d-flex justify-content-between border-0 ">
                                        <span class="text-amount text-uppercase">Address : </span>
                                        <span class="text"><?php echo e($orders->address); ?></span>
                                    </li>
                                    <li class="d-flex justify-content-between border-0">
                                        <span class="text-amount text-uppercase">email : </span>
                                        <span class="text"><?php echo e($orders->user->email); ?></span>
                                    </li>
                                    <li class="d-flex justify-content-between border-0">
                                        <span class="text-amount text-uppercase">phone : </span>
                                        <span class="text"><?php echo e($orders->user->phone_number); ?></span>
                                    </li>
                                </ul>
                                <ul class="order-details p-0 mb-5">
                                    <h3 class="text-uppercase">billing details</h3>
                                    <li class="d-flex justify-content-between border-0 ">
                                        <span class="text-amount text-uppercase">Name : </span>
                                        <span class="text">Customer Address</span>
                                    </li>
                                    <li class="d-flex justify-content-between border-0">
                                        <span class="text-amount text-uppercase">Email : </span>
                                        <span class="text">info@companyname.com</span>
                                    </li>
                                    <li class="d-flex justify-content-between border-0">
                                        <span class="text-amount text-uppercase">phone : </span>
                                        <span class="text">(+000) 00000 00000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->make('customer.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/slick/slick.min.js"></script>
    <script>
        $('.tabber-list-container li').click(function () {
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
        })
    </script>
<?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/customer/cart/confirmation.blade.php ENDPATH**/ ?>