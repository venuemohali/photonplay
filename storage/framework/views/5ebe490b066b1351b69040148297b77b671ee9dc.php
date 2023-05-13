<?php
use App\Models\Setting;
$setting = Setting::first();
?>
<section class="contact-form bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-sec-info">
                    <div class="text-start pb-2">
                        <h2 class="fs-md-2 mt-3">Request a Demo</h2>
                        <p class="opacity-50">We're dedicated to creating meaningful connections
                            that propel your success forward.</p>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <?php if($setting): ?>
                            <a href="tel:<?php echo e($setting->sales_phone); ?>"><img src="<?php echo e(asset('assets\customer\images\phone.svg')); ?>" /> <?php echo e($setting->sales_phone); ?></a>

                            <a href="tel:<?php echo e($setting->support_phone ?? ''); ?>"><img src="<?php echo e(asset('assets\customer\images\phone.svg')); ?>" /> <?php echo e($setting->support_phone); ?></a>

                            <a href="mailto:<?php echo e($setting->sales_email ?? ''); ?>"><img src="<?php echo e(asset('assets\customer\images\message.png')); ?>" /> <?php echo e($setting->sales_email); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-start pb-2">
                    <h2 class="fs-md-2 mt-3">GET IN TOUCH</h2>
                    <p class="opacity-50">Empowering connections that drive your success.</p>
                </div>
                <form action="<?php echo e(route('customer.inquery.submit')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <input name="company_name" type="text" id="inputtext5" placeholder="Company Name / Organization*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="country" type="text" id="inputtext5" placeholder="Country*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="first_name" type="text" id="inputtext5" placeholder="First Name*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="last_name" type="text" id="inputtext5" placeholder="Last Name*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="email" type="text" id="inputtext5" placeholder="Email Address*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="phone_number" type="text" id="inputtext5" placeholder="Phone Number*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" class="form-control rounded-0 mb-4" rows="4" placeholder="Message" aria-describedby="textHelpBlock"></textarea>
                        </div>
                    </div>
                    <div class="text-start">
                    <button type="submit" class="btn btn-primary px-5 rounded-0">Send Now</button>
                </div>
                </form>

            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/customer/layout2/get_in_touch.blade.php ENDPATH**/ ?>