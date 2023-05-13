<?php $__env->startSection('title', 'Welcome To Photon Play'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3> Banner</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Banners</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">Banner</h5>
                        <a href="<?php echo e(route('admin.banners_create')); ?>" class="btn btn-primary ms-auto">Add New Banner</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div class="dt-ext table-responsive">
                                <table class="display table-bordered w-100" id="basic-1">
                                    <thead>
                                    <tr>
                                        <th class="all">#</th>
                                        <th class="all">Type </th>
                                        <th class="all">Image </th>
                                        <th class="all">Tagline </th>
                                        <th class="all">Sub Tagline </th>
                                        <th class="all">Order </th>
                                        <th class="all">Created</th>
                                        <th class="all">Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="Item-<?php echo e($item->id); ?>">
                                            <td><?php echo e($Sr++); ?></td>
                                            <td>
                                                <p class="p-2 m-2">
                                                <?php if($item->type==1): ?>
                                                Homepage
                                                <?php elseif($item->type==2): ?>
                                                    Key Projects
                                                <?php elseif($item->type==3): ?>
                                                        Solution-Highways
                                                <?php elseif($item->type==4): ?>
                                                        Solution-Smart Cities
                                                <?php elseif($item->type==5): ?>
                                                        Solution-Tunnels
                                                <?php elseif($item->type==6): ?>
                                                        Solution-Transit
                                                <?php elseif($item->type==7): ?>
                                                        Radar Speed Sign
                                                <?php elseif($item->type==8): ?>
                                                        Portable Variable Message Sign
                                                <?php endif; ?>
                                                </p>

                                            </td>
                                            <td>
                                                <img src="/storage/<?php echo e($item->image); ?>" class="img-fluid p-1 m-2" style="height: 100px;width: 200px;"/></td>

                                            <td><?php echo e($item->tagline?? '-'); ?></td>
                                            <td><?php echo e($item->sub_tagline?? '-'); ?></td>
                                            <td><?php echo e($item->order?? '0'); ?></td>
                                            <td><?php echo e($item->created_at); ?></td>
                                            <td>
                                                <a href="<?php echo e(route("admin.banners_edit",$item->id)); ?>" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                                    <i data-feather="edit"></i>
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
                                                                    url:'<?php echo e(route('admin.banners_delete',$item->id)); ?>',
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



        <script type="text/javascript">
            var session_layout = '<?php echo e(session()->get('layout')); ?>';
        </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/banner/index.blade.php ENDPATH**/ ?>