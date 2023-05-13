

<?php $__env->startSection('title', 'Welcome To Photon Play'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Dashboard</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Default</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!-- 4 Columns Start -->
        <div class="row">
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user"></i></div>
                            <div class="media-body">
                                <span class="m-0">Total Users</span>
                                <h4 class="mb-0 counter"><?php echo e($users); ?></h4>
                                <i class="icon-bg" data-feather="users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user-check"></i></div>
                            <div class="media-body">
                                <span class="m-0">Categories</span>
                                <h4 class="mb-0 counter"><?php echo e($category); ?></h4>
                                <i class="icon-bg" data-feather="user-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-info b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="edit-3"></i></div>
                            <div class="media-body">
                                <span class="m-0">Products</span>
                                <h4 class="mb-0 counter"><?php echo e($products); ?></h4>
                                <i class="icon-bg" data-feather="edit-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-success b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user-x"></i></div>
                            <div class="media-body">
                                <span class="m-0">Orders</span>
                                <h4 class="mb-0 counter"><?php echo e($orders); ?></h4>
                                <i class="icon-bg" data-feather="user-x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4 Columns End -->

        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Orders</h5>
                        <div class="table-responsive">
                            <div class="dt-ext table-responsive">
                                <table class="display" id="basic-2">
                                    <thead>
                                        <tr>
                                            <th class="all">#</th>
                                            <th class="all">Order ID</th>
                                            <th class="all">Name</th>
                                            <th class="desktop tablet">Email</th>
                                            <th class="desktop tablet">Status</th>
                                            <th class="all">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script type="text/javascript">
            var session_layout = '<?php echo e(session()->get('layout')); ?>';
        </script>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('script'); ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\The Miraj\Desktop\laravell(06-05-2023)\photonplay\resources\views/Dashboard.blade.php ENDPATH**/ ?>