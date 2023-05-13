<?php $__env->startSection('title', 'Photon Play System'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Add Specilization</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Add Product</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Product Setup</h5>
                        <hr/>

                        <?php if (isset($component)) { $__componentOriginalb389da14890eaa4240d9fef8a5dced69199627a0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Product\HeaderMenu::class, ['pid' => $product->id,'page' => 1]); ?>
<?php $component->withName('Product.HeaderMenu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb389da14890eaa4240d9fef8a5dced69199627a0)): ?>
<?php $component = $__componentOriginalb389da14890eaa4240d9fef8a5dced69199627a0; ?>
<?php unset($__componentOriginalb389da14890eaa4240d9fef8a5dced69199627a0); ?>
<?php endif; ?>
                        <hr/>
                        <div class="row">
                            <div class="col-md-12 d-flex">
                                <h5>Product Specifications</h5>
                                <a href="<?php echo e(url('/admin/add/product-specification/'.$product->id)); ?>" class="btn btn-primary ms-auto">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="plus-circle"> </i>
                                       <span> Add Specification</span>
                                    </div>
                                   </a>
                            </div>

                        </div>
                    </div>


                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 p-2">
                                <table class="display" id="basic-2">
                                    <thead>
                                    <tr>
                                        <th class="all">#</th>
                                        <th class="all">Specification</th>
                                        <th class="all">Counts</th>
                                        <th class="all">Created</th>
                                        <th class="all">Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>

<?php $__currentLoopData = $product_specilizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr id="Item-<?php echo e($item->id); ?>">
        <td><?php echo e($Sr++); ?></td>
        <td><?php echo e($item->specilization()->first()->title); ?></td>
        <td><?php echo e($item->counts); ?></td>
        <td><?php echo e(date('d-m-Y',strtotime($item->created_at)) ?? ''); ?></td>
        <td>
            <a href="<?php echo e(url('admin/product-specification-options/'.$product->id.'/'.$item->id)); ?>" class="text-warning p-1" data-toggle="tooltip" title="Edit">
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
                                url:'<?php echo e(url('admin/delete/product-specification/'.$item->id)); ?>',
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
        </div>
    </div>


    <script>
        $(document).ready(function() {

            $('#summernote').summernote({
                placeholder: 'Hello Photon Play Systems',
                tabsize: 2,
                height: 200
            });

        });


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/product/edit.blade.php ENDPATH**/ ?>