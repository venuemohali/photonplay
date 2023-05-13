<?php echo $__env->make('customer.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- header-end -->
<!-- Tabber-start -->
<section class="stepper-form-tabber pt-3 pb-0">
    <div>
        <ul class="d-flex justify-content-center justify-content-md-between tabber-list-container flex-wrap">
            <li <?php if(Request::is('shopping-bag')): ?> class="active" <?php endif; ?>>01 SHOPPING BAG <span class="d-block">Manage Your Items List</span></li>
            <li>02 SHIPPING AND CHECKOUT <span class="d-block">Checkout your items list</span></li>
            <li>03 CONFIRMATION<span class="d-block">Review and submit Your order</span></li>
        </ul>
    </div>
</section>


<!-- Form -->
<section class="step-formation bg-light pb-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 table-responsive">
                <table class="table border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-capitalize text-center">Product</th>
                            <th scope="col" class="text-capitalize text-center">price</th>
                            <th scope="col" class="text-capitalize text-center">quantity</th>
                            <th scope="col" class="text-capitalize text-center">total price</th>
                            <th scope="col" class="text-capitalize text-center">remove</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__empty_1 = true; $__currentLoopData = $cart_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="border border-end">
                                <div class="d-flex align-items-center p-1">
                                    <img src="<?php echo e(asset('storage/'.$cart->cover_image)); ?>" alt="Not Found" class="profile-table me-2 h-25 w-25">
                                    <div class="d-flex flex-column">
                                        <h6 class="text-uppercase"><?php echo e($cart->category); ?></h6>
                                        <span>Brand : <?php echo e($cart->title); ?></span>
                                        
                                        <span>Color : ----</span>
                                    </div>
                                </div>
                            </td>
                            <td class="border border-end text-center">$<?php echo e($cart->price); ?></td>
                            <td class="border border-end text-center"><?php echo e($cart->quantity); ?></td>
                            <td class="border border-end text-center">$<?php echo e($total_price =  $cart->price * $cart->quantity); ?></td>
                            <td class="border border-end text-center"><a href="<?php echo e(route('customer.delete.cart.table.item', $cart->id ?? $cart->id)); ?>"><img src="<?php echo e(asset('assets/customer/images/crosss.png')); ?>" alt="Not Found" class="cartItem"></a>

                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr >
                        <td colspan="5" align="center" > <span class="h6"> No Item in cart </span></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- End Form -->
<section class="step-form bg-light pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <form action="<?php echo e(route('customer.shopping.bag')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="box-coupon bg-white p-3 py-4 h-100">
                            <h3>Coupon Discount</h3>
                            <label class="d-block mb-3 opacity-50">Enter your coupon code if you have one!</label>
                            <input type="text" name="coupon" class="form-control rounded-0 mb-4" placeholder="Enter your coupon here" <?php if($coupon_name != 0): ?> readonly <?php endif; ?> value="<?php if($coupon_name != 0): ?> <?php echo e(strtoupper($coupon_name)); ?> <?php endif; ?>">
                            <?php if($coupon_name == 0): ?>
                            <input type="hidden" name="total" value="<?php echo e($grand_total); ?>">
                                <button class="btn btn-primary rounded-0 ">Apply Coupon</button>
                            <?php else: ?>
                            <input type="hidden" name="remove_coupon" value="1">
                                <span class="text-success"><b> Coupon Successfully Applied</b></span>
                                <button class="btn btn-sm bg-danger text-white mx-4">Remove</button>
                            <?php endif; ?>
                        </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-details bg-white p-3 py-4">
                            <h3>Payment Details</h3>
                            <ul class="order-details p-0 mb-5">
                                <li class="d-flex justify-content-between">
                                    <span class="text">Cart Subtotal</span>
                                    <span class="text-amount">$<?php echo e($total); ?></span>
                                </li>
                                <?php if($discounted_amount != 0): ?>
                                <li class="d-flex justify-content-between">
                                    <span class="text">Discount</span>
                                    <span class="text-amount text-danger">$<?php echo e($discounted_amount); ?></span>
                                </li>
                                <?php endif; ?>
                                <li class="d-flex justify-content-between">
                                    <span class="text text-capitalize">Shipping and Handing</span>
                                    <span class="text-amount">$<?php echo e($shipping = $taxes->shipping_time ?? 00.00); ?></span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span class="text text-capitalize">Tax/GST</span>
                                    <span class="text-amount">$<?php echo e($gst = $taxes->gst ?? 00.00); ?></span>
                                </li>

                                <li class="d-flex justify-content-between active">
                                    <span class="text text-capitalize fw-bold">Order total</span>
                                    <span class="text-amount">$<?php echo e($grand_total + $shipping + $gst); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box-coupon bg-white p-3 py-4 my-5">
                            <h3>Checkout</h3>
                            <label for="" class=" d-block mb-4 opacity-50">Click to proceed</label>
                            <?php if(!Session::get('user')): ?>
                                <a href="<?php echo e(route('customer.loginForm', ['p' => 1, 's' => Session::getId()])); ?>" class=" btn btn-primary rounded-0" >Proceed to buy</a>
                            <?php else: ?>
                            <!-- confirmation form -->
                                <form action="<?php echo e(route('customer.checkout')); ?>" method="any">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="coupon_s" value="<?php echo e($coupon_name); ?>">
                                    <input type="hidden" name="discount_s" value="<?php echo e($discounted_amount); ?>">
                                    <button type="submit" class=" btn btn-primary rounded-0" >Proceed to buy</button>
                                </form>
                            <!-- confirmation form ends-->

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('customer.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function(){
    $('.cartItem').on('click', function(){
        console.log($('.cartItem').val());
    });
  });
</script>
<?php /**PATH C:\Users\The Miraj\Desktop\laravell(06-05-2023)\photonplay\resources\views/customer/cart/shopping_bag.blade.php ENDPATH**/ ?>