<?php $__env->startSection('title', 'Manage Products'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Manage Products</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Products</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">



        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                    <h5 class="card-title">All Products</h5>
                    <a href="<?php echo e(route('admin.product.create')); ?>" class="btn btn-primary ms-auto d-flex align-items-center">
                        <i data-feather="plus-circle"> </i>
                        Add New Product</a>
                </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive table-bordered responsive ">
                            <table class="display w-100" id="basic-2"   >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Created at</th>
                                        
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($Sr++); ?></td>
                                        <td><?php echo e($product->title); ?></td>
                                        <td><?php echo e($product->price); ?></td>
                                        <td><span class="text-<?php echo e($product->status=='Listed'?'success':($product->status=='Unlisted'?'warning':'danger')); ?>"><?php echo e($product->status); ?> </span></td>
                                        <td><?php echo e($product->created_at->format('d/m/Y')); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.product_basic_update',$product->id)); ?>" class="text-success p-1" data-toggle="tooltip" title="Edit">
                                                <i data-feather="edit-3"></i>
                                            </a>
                                            <a href="<?php echo e(route('admin.product.edit',$product->id)); ?>" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                                <i data-feather="edit"></i>
                                            </a>

                                            <a id="Delete-" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                                                <i data-feather="trash-2"></i>
                                            </a>
                                            <script>
                                                $('#Delete-').click(function(){
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
                                                        window.location.href = "<?php echo e(url('admin/delete-employee/')); ?>";
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

        <script type="text/javascript">
            var session_layout = '<?php echo e(session()->get('layout')); ?>';

        </script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('script'); ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/product/index.blade.php ENDPATH**/ ?>