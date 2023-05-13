<?php
    use App\Models\ClientTestimonial;
    $client_says=ClientTestimonial::latest()->take(10)->get();
?>


<section class="our-clints pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mb-lg-5">
                    <h2 class="fs-md-2 mt-3">Our Client Says</h2>
                    <p class="text-mutedd"> See What Our Satisfied Clients Have to Say About Our Innovative ITS Solutions</p>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row clint-wrapperr">
                    <!-- <div class=""> -->

                    <?php $__currentLoopData = $client_says; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $says): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4">
                            <div class="members-profile h-100 mx-3 h-100">
                                <div class="p-4 position-re lative h-100 inner-max-width">
                                    <div class="qutess position-absolute top-0 translate-middle">
                                        
                                        
                                    </div>
                                    <div class="d-flex">
                                        <img class="profile-placeholder rounded-circle cicles"
                                             src="<?php echo e(asset('storage/'.$says->image)); ?>" alt="Not Found">
                                        <div class="ms-2 d-flex flex-column align-items-center justify-content-start">
                                            <div class="five-star text-left w-100">

                                                <?php for($j = 1; $j <= 5; $j++): ?>
                                                    <?php if($j <= $says->rating): ?>
                                                        <i class="bi bi-star-fill text-primary"></i>
                                                    <?php else: ?>
                                                        <i class="bi bi-star text-primary"></i>
                                                    <?php endif; ?>
                                                <?php endfor; ?>

                                            </div>
                                            <p class="text-capitalize mb-0 fs-6 full-names"><?php echo e($says->name); ?></p>
                                            <p class="mb-0"><?php echo e($says->position); ?></p>
                                        </div>
                                    </div>
                                    <div class="text-start mt-3">
                                        <p> <?php echo e($says->message); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/customer/layout2/client_testimonials.blade.php ENDPATH**/ ?>