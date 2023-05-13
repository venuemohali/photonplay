
Dear User
Your Reset Password link : 

<a href="<?php echo e(route('customer.reset_password', $body['token'])); ?>" target="_blank">Reset Password</a>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/mail/reset-password-mail.blade.php ENDPATH**/ ?>