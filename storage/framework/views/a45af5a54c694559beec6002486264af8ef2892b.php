<?php
use App\Models\Client;
$clients = Client::get();
?>
<section class="our-clints-last">
        <div class="mb-lg-5 text-center">
            <h2 class="fs-md-2 mt-3">Our Clients</h2>
        </div>
        <div class="container">
            <div class="px-4">
            <!-- <?php $__empty_1 = true; $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php echo e($loop->index); ?>

                    <div>
                        <div class="px-2 branding-diss">
                            <img src="<?php echo e(asset('storage/'.$client->image)); ?>" class="d-block mx-auto" />
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?> -->
                <div class="clints-content-branding mb-0 d-flex align-items-center justify-content-center">
                    <?php $__empty_1 = true; $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div>
                        <div class="px-2 branding-diss" id="<?php echo e($client->index); ?>">
                            <img src="<?php echo e(asset('storage/'.$client->image)); ?>" class="d-block mx-auto" />
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php /**PATH C:\xampp\htdocs\photonplay\resources\views/customer/layout2/our_clients.blade.php ENDPATH**/ ?>