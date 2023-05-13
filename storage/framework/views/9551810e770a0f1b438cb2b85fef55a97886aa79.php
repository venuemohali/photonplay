<?php $__env->startSection('title', 'Welcome To Photon Play'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3> Our Team members</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Our Team Members</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">Our Team Members</h5>
                        <a href="<?php echo e(route('admin.team_member_create')); ?>" class="btn btn-primary ms-auto">Add Team Member</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div class="dt-ext table-responsive">
                                <table class="display table-bordered" id="basic-2">
                                    <thead>
                                    <tr>
                                        <th class="all">#</th>
                                        <th class="all">Profile </th>
                                        <th class="all">Name</th>
                                        <th class="all">Detail</th>
                                        <th class="all">Social</th>

                                        <th class="all">Created</th>
                                        <th class="all">Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="Item-<?php echo e($item->id); ?>">
                                            <td><?php echo e($Sr++); ?></td>
                                            <td> <img src="/storage/<?php echo e($item->image); ?>" class="img-fluid" style="height: 100px;"/></td>
                                            <td> <?php echo e($item->name); ?></td>
                                            <td> <?php echo e($item->detail); ?></td>
                                            <td> <a href="<?php echo e($item->facebook); ?>">Facebook</a>
                                                <a href="<?php echo e($item->linkedin); ?>">Linkedin</a>
                                                <a href="<?php echo e($item->twitter); ?>">Twitter</a>
                                            </td>

                                            <td><?php echo e(date('d-m-Y',strtotime($item->created_at)) ?? ''); ?></td>
                                            <td>
                                                <a href="<?php echo e(route("admin.team_member_edit",$item->id)); ?>" class="text-warning p-1" data-toggle="tooltip" title="Edit">
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
                                                                    url:'<?php echo e(route('admin.team_member_delete',$item->id)); ?>',
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

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/team_member/index.blade.php ENDPATH**/ ?>