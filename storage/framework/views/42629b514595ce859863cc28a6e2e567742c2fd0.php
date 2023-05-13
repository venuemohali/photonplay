<?php if (isset($component)) { $__componentOriginal52915520db643621e1e895cf760352cd6263f0d5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Layout\Sidebar::class, []); ?>
<?php $component->withName('Admin.Layout.Sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52915520db643621e1e895cf760352cd6263f0d5)): ?>
<?php $component = $__componentOriginal52915520db643621e1e895cf760352cd6263f0d5; ?>
<?php unset($__componentOriginal52915520db643621e1e895cf760352cd6263f0d5); ?>
<?php endif; ?>
<?php /**PATH C:\Users\The Miraj\Desktop\laravell(06-05-2023)\photonplay\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>