<?php $__env->startComponent('mail::message'); ?>
    <table style="margin: 0 auto;">
        <tr>
            <td>
                <img src='<?php echo e(asset('assets/customer/images/logo-dark.png')); ?>' style="width: 200px; height: 100px;"  alt="Logo"/>
            </td>
        </tr>
    </table>
    <?php echo $message->body; ?>

    
    Thanks,<br>
    <?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/mail/NotificationMail.blade.php ENDPATH**/ ?>