    <?php if (isset($component)) { $__componentOriginala9fb713297be4b5ddaa724d149617d4b66e48164 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Customer\Footer::class, []); ?>
<?php $component->withName('Customer.Footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9fb713297be4b5ddaa724d149617d4b66e48164)): ?>
<?php $component = $__componentOriginala9fb713297be4b5ddaa724d149617d4b66e48164; ?>
<?php unset($__componentOriginala9fb713297be4b5ddaa724d149617d4b66e48164); ?>
<?php endif; ?>

<?php $__env->startPush('head'); ?>
<?php echo $__env->make('customer.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\The Miraj\Desktop\laravell(06-05-2023)\photonplay\resources\views/customer/layouts/footer.blade.php ENDPATH**/ ?>