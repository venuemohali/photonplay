<?php $__env->startSection('title', 'Manage Orders'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Manage Orders</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Orders</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">



        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">All Orders</h5>

                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Order No.</th>

                                    <th>Grand Total</th>
                                    <th>City</th>
                                    <th>Status</th>
                                    <th>Payment Status </th>
                                    <th>Created at</th>
                                    <th>Options</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="Item-<?php echo e($item->id); ?>">
                                        <td><?php echo e($Sr++); ?></td>
                                        <td><?php echo e($item->order_number); ?></td>

                                        <td>$<?php echo e($item->grand_total); ?>/-</td>
                                        <td><?php echo e($item->billing_city); ?></td>

                                        <td><span class="<?php echo e($item->status=='complete'?'bg-success p-2':''); ?>"><?php echo e($item->status); ?></span></td>
                                        <td><span class="<?php echo e($item->payment_status=='paid'?'bg-success p-2':''); ?>"><?php echo e($item->payment_status); ?></span></td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.orders_show', $item->id)); ?>" class="text-warning p-1" data-toggle="tooltip" title="Show">
                                                <i data-feather="eye"></i>
                                            </a>
                                            <a id="Delete-<?php echo e($item->id); ?>" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                                                <i data-feather="trash-2"></i>
                                            </a>
                                            <script>
                                                $('#Delete-<?php echo e($item->id); ?>').click(function(){
                                                    console.log("hello");
                                                    Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: "You won't be able to revert this!",
                                                        icon: 'question',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Yes, delete it!'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            $.ajaxSetup({
                                                                headers: {
                                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                }
                                                            });

                                                            $.ajax({
                                                                type:'DELETE',
                                                                url:'<?php echo e(url('admin/coupons/'.$item->id)); ?>',
                                                                data:'_token = <?php echo e(@csrf_token()); ?>',
                                                                success:function(data) {
                                                                    $("#Item-<?php echo e($item->id); ?>").hide();
                                                                }
                                                            });

                                                        }
                                                    });
                                                });
                                            </script>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Client Table End -->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/order/index.blade.php ENDPATH**/ ?>