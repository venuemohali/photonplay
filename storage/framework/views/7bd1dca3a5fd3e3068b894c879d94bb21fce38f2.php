<?php echo $__env->make('customer.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<head>
    <title>Buy cool new product</title>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
<section class="stepper-form-tabber pt-3 pb-0">
        <div>
            <ul class="d-flex justify-content-center justify-content-md-between tabber-list-container flex-wrap">
                <li>01 SHOPPING BAG <span class="d-block">Manage Your Items List</span></li>
                <li <?php if(Request::is('shipping-and-checkout')): ?> class="active" <?php endif; ?>>02 SHIPPING AND CHECKOUT <span class="d-block">Checkout your items list</span></li>
                <li>03 CONFIRMATION<span class="d-block">Review and submit Your order</span></li>
            </ul>
        </div>
    </section>

    <!-- Form -->
    <section class="step-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <form action="<?php echo e(route('customer.place.order')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <h3>billing details</h3>
                    <input type="text" class="form-control rounded-0 px-3" name="billing_street" placeholder="Street Number" required>
                    <input type="text" class="form-control rounded-0 px-3" name="billing_flat_suite" placeholder="Flat/Suite" >
                    <input type="text" class="form-control rounded-0 px-3" name="billing_city"
                    placeholder="City" required>
                    <input type="text" class="form-control rounded-0 px-3" name="billing_state" placeholder="State" required>
                    <input type="text" class="form-control rounded-0 px-3" name="billing_country" placeholder="Country" required>
                    <input type="text" class="form-control rounded-0 px-3" name="billing_postcode" placeholder="Postcode" required>
                    <textarea name="address" class="form-control rounded-0 mt-2" rows="5"
                        placeholder="Your address here..." required></textarea>
                    
                    
                    <label class="d-block mt-3">Order notes (optional)</label>
                    <textarea name="order_notes" class="form-control rounded-0 mt-2" rows="5"
                        placeholder="Your address here..."></textarea>
                </div>
                <div class="col-md-6">
                    <h3>our order</h3>
                    <ul class="order-details p-0 mb-5">
                        <?php $__currentLoopData = $cart_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" name="product_ids[]" value="<?php echo e($item->id); ?>">

                        <li class="d-flex justify-content-between">
                            <span class="text"><?php echo e($item->title); ?> x <?php echo e($item->quantity); ?></span>
                            <span class="text-amount">$<?php echo e($item->price * $item->quantity); ?></span>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="d-flex justify-content-between">
                            <span class="text">Shipping Charges</span>
                            <span class="text-amount">$<?php echo e($shipping = $taxes->shipping_time ?? 00); ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="text"><b>Cart Subtotal</b></span>
                            <span class="text-amount">$<?php echo e($total); ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="text">GST</span>
                            <span class="text-amount">$<?php echo e($gst = $taxes->gst ?? 00); ?></span>
                        </li>
                        <?php if($discount != 0): ?>
                        <li class="d-flex justify-content-between">
                            <span class="text">Discount</span>
                            <span class="text-amount text-danger">$<?php echo e($discount); ?></span>
                        </li>
                        <?php endif; ?>
                        <li class="d-flex justify-content-between">
                            <span class="text"><b>Grand Total</b></span>
                            <span class="text-amount">$<?php echo e($grand_total = ($total - $discount) + $shipping + $gst); ?></span>
                        </li>
                    </ul>

                    <input type="hidden" name="grand_total" value="<?php echo e($grand_total); ?>">
                    <button type="submit" id="checkout-button">Checkout</button>
                </form>

                </div>
            </div>
        </div>
    </section>
<?php echo $__env->make('customer.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $('.tabber-list-container li').click(function() {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    })
</script>
<?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/customer/cart/checkout.blade.php ENDPATH**/ ?>