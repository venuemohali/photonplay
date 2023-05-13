<!doctype html>
<html>
<head>
    <?php echo $__env->make('customer.layout2.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
<div>
    <?php echo $__env->make('customer.layout2.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('customer.layout2.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</body>
</html>
<?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/customer/layout2/homelayout.blade.php ENDPATH**/ ?>