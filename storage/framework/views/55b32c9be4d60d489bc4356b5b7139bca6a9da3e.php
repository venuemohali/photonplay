

<?php $__env->startSection('title', 'Show Orders'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Show Orders</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Show Orders</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">



        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title p-1 d-flex justify-content-around align-items-center m-2 p-2">
                            <span>   Order : <?php echo e($order->order_number); ?></span>
                            <span>
                                <select class="form-select  shadow-none m-2">
                                    <option value="Pending"> Pending</option>
                                    <option  value="payment_received"> Payment Received</option>
                                     <option value="Pending"> Pending</option>
                                    <option  value="payment_received"> Payment Received</option>
                                     <option value="Pending"> Pending</option>
                                    <option  value="payment_received"> Payment Received</option>
                                </select>

                            </span>
                        </h4>
                        <div class="shadow-sm p-3">
                        <p> Payment Status : <span class="<?php echo e($order->payment_status=='paid'?'text-success':'text-warning'); ?> p-1">
                                    <?php echo e(ucfirst($order->payment_status)); ?> </span>   </p>

                        <p> Trasaction No. : <span>
                                <?php echo e($order->trx_id); ?></span> </p>
                        <p>  <b> Order Note: </b>  <?php echo e($order->order_notes??'Order notes not available.'); ?></p>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="dt-ext table-responsive">

                            <h2> </h2>
                            <div class="shadow-lg p-4 ">
                                <h2> Product </h2>
                                <hr/>
                            <table class="table table-bordered  table-hover">
                                <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Options</th>
                                    <th>Quantity</th>
                                    <th>Price</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $order->orderedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($prod->product_id); ?></td>
                                        <td><img src="<?php echo e(asset("storage/".$prod->cover_image)); ?>" alt="Image not found" /></td>
                                        <td><?php echo e($prod->title); ?></td>
                                        <td><?php echo e($prod->option_ids); ?></td>
                                        <td><?php echo e($prod->quantity); ?></td>
                                        <td>$<?php echo e($prod->price); ?>/-</td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>

                                    </td>
                                    <td colspan="4">
                                    </td>
                                    <td>
                                        $<?php echo e($order->grand_total); ?> /-
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                            <br/>

                            <div class="shadow-lg p-4 ">
                                <h2> Customer </h2>
                                <hr/>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>Stripe Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>


                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><?php echo e($order->user->id); ?></td>
                                        <td><?php echo e($order->user->stripe_id); ?></td>
                                        <td><?php echo e($order->user->name); ?></td>
                                        <td><?php echo e($order->user->email); ?></td>
                                        <td><?php echo e($order->user->phone_number); ?></td>
                                    </tr>

                                </tbody>
                            </table>
                            </div>
                            <br/>
                            <div class="shadow-lg p-4 ">
                                <h2> Billing Address </h2>
                                <hr/>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Billing Street</th>
                                        <th>Billing Flat Suite</th>
                                        <th>Billing City</th>
                                        <th>Billing State</th>
                                        <th>Billing Countryr</th>
                                        <th>Billing Postcode</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><?php echo e($order->billing_street); ?></td>
                                        <td><?php echo e($order->billing_flat_suite); ?></td>
                                        <td><?php echo e($order->billing_city); ?></td>
                                        <td><?php echo e($order->billing_state); ?></td>
                                        <td><?php echo e($order->billing_country); ?></td>
                                        <td><?php echo e($order->billing_postcode); ?></td>
                                    </tr>


                                    </tbody>
                                </table>
                                <div class="shadow-sm p-3">
                                    <p>  <b> Address Note: </b>  <?php echo e($order->address); ?></p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Client Table End -->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/order/show.blade.php ENDPATH**/ ?>