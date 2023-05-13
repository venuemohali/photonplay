<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="_____Name_____">
    <link rel="icon" href="<?php echo e(asset('assets/logo/fav.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/logo/fav.png')); ?>" type="image/x-icon">
     <title>Welcome to Photon play <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">


    <?php echo $__env->make('layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <?php echo $__env->yieldContent('style'); ?>
  </head>
  <body>
    <!-- login page start-->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- latest jquery-->
    <?php echo $__env->make('layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if( session('failed')): ?>
      <script>
        $(document).ready(function(){
          toastr.error("<?php echo e(session('failed')); ?>", 'Warning');
        });
      </script>
    <?php endif; ?>
    <?php if( session('banned')): ?>
    <h1>banned</h1>
      <script>
        $(document).ready(function(){
        toastr.error("<?php echo e(session('banned')); ?>", 'Warning');
        });
      </script>
    <?php endif; ?>



    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  </body>
</html>
<?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/auth-master.blade.php ENDPATH**/ ?>