<?php
use App\Models\Setting;
use App\Models\Category;
use App\Models\Blog;
$setting = Setting::first();
$categories = Category::select('title')->take(3)->get();
$blogs = Blog::select('slug','title')->take(4)->get();
?>

<!-- _____________________ourclint-last-end___________________ -->
    <section class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="subscribe-wrapper text-center">
                    <h3 class="subscribe-title">Don’t miss our weekly updates about <br>
                        New Products</h3>
                    <form action="<?php echo e(route('customer.newsletter.store')); ?>" class="subscribr-form" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="col-lg-4 mx-auto">
                            <div class="d-flex border-bottom">
                                <input type="text" placeholder="Enter your email address..."
                                       class="bg-transparent w-100 border-0 text-white outline-0 border-0 shadow-none" name="email" autocomplete="off">
                                <button class="bg-transparent border-0 text-white p-2">SUBSCRIBE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section px-2">
        <div class="footer-section-inner d-lg-flex justify-content-center">
            <div class="footer-item mb-0 mb-md-5 footer-item-1">
                <div class="logo-bottom mb-lg-4 w-100">
                    <img src="<?php echo e(asset('assets\customer\images\logo-dark.png')); ?>" alt="">
                </div>
                <div class="description">
                    PHOTONPLAY is a family owned, India based design, develop and manufacturing of Systems for the ITS
                    industry since 2006. With subsidiary offices in US, Australia and Norway plus distribution facility
                    in
                    the US and representatives all over the world, PHOTONPLAY has satisfied customers (System
                    integrators,
                    Govt Authorities, OEMs and corporates) in over 30 countries worldwide.
                </div>

            </div>
            <!-- <div class="footer-item mb-0 mb-md-5 footer-item-three">
                <h2>SHOP</h2>
                <ul class="p-0">
                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li><a><?php echo e($category->title); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?>
                </ul>
            </div> -->
            <div class="footer-item mb-0 mb-md-5 footer-item-2">
                <h2>QUICK LINKS</h2>
                <ul class="p-0">
                    <li><a href="" class="text-capitalize">Home</a></li>
                    <li><a href="" class="text-capitalize">About us</a></li>
                    <li><a href="" class="text-capitalize">Contact us</a></li>
                    <li><a href="" class="text-capitalize">News & Events</a></li>
                    <li><a href="" class="text-capitalize">Sitemap</a></li>
                    <!-- <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li><a><?php echo e($category->title); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?> -->
                </ul>
            </div>
            <div class="footer-item mb-0 mb-md-5 footer-item-2">
                <h2 class="text-uppercase">SOLUTIONS</h2>
                <ul class="p-0">
                    <li><a href="<?php echo e(route('customer.solution.highway')); ?>">Highway</a></li>
                    <li><a href="<?php echo e(route('customer.solution.tunnel')); ?>">Tunnels</a></li>
                    <li><a href="<?php echo e(route('customer.solution.city')); ?>">Smart Cities</a></li>
                    <li><a href="<?php echo e(route('customer.solution.transit')); ?>">Transit</a></li>
                </ul>
            </div>
            <!-- <div class="footer-item mb-0 mb-md-5 footer-item-four">
                <h2>NEWS & EVENTS</h2>
                <ul class="p-0">
                    <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li><a href="<?php echo e($blog->slug); ?>"><?php echo e($blog->title); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?>

                </ul>
            </div> -->
            <div class="footer-item mb-0 mb-md-5 footer-item-5">
                <h2 class="w-100">Get in Touch with Us</h2>
                <div class="contact-info w-100">
                    <div class="contact-info-item w-100">
                        <?php if($setting): ?>
                        <a href="tel:<?php echo e($setting->sales_phone); ?>"><img src="<?php echo e(asset('assets\customer\images\phone.svg')); ?>" /> <?php echo e($setting->sales_phone); ?></a>
                        <?php if($setting->support_phone !=null): ?>
                        <a href="tel:<?php echo e($setting->support_phone); ?>"><img src="<?php echo e(asset('assets\customer\images\phone.svg')); ?>" /> <?php echo e($setting->support_phone); ?></a>
                        <?php endif; ?>
                        <a href="mailto:<?php echo e($setting->sales_email); ?>"><img src="<?php echo e(asset('assets\customer\images\message.png')); ?>" /> <?php echo e($setting->sales_email); ?></a>
                        <?php endif; ?>
                    </div>
                    <a href="<?php echo e(route('customer.contact.us')); ?>" class="btn btn-primary mt-3">Contact Now</a>
                    <ul class="social-media pt-md-4 py-4 ps-0 w-100">
                    <li><a class="" href="<?php echo e($setting->facebook ?? ''); ?>"><img src="<?php echo e(asset('assets\customer\images\facebook.svg')); ?>" /></a></li>
                    <li><a class="" href="<?php echo e($setting->twitter  ?? ''); ?>"><img src="<?php echo e(asset('assets\customer\images\twitter.jpg')); ?>" /></a></li>
                    <li><a class="" href="<?php echo e($setting->linkedin ?? ''); ?>"><img src="<?php echo e(asset('assets\customer\images\linkdin.jpg')); ?>" /></a></li>
                    <li><a class="" href="<?php echo e($setting->instagram ?? ''); ?>"><img src="<?php echo e(asset('assets\customer\images\instagram.png')); ?>" /></a></li>
                    <li><a class="" href="<?php echo e($setting->instagram ?? ''); ?>"><img src="<?php echo e(asset('assets\images\social05.png')); ?>" /></a></li>
                    <li><a class="" href=""><img src="<?php echo e(asset('assets\images\social06.png')); ?>" /></a></li>
                </ul>
                </div>
            </div>
        </div>
    </footer>
       <div class="container-fluid">
          <div class="sec-copyright py-3 text-center m-auto d-flex justify-content-between align-items-center">
              <p>
                 <a href="<?php echo e(route('customer.show_page_policy','term-conditions')); ?>"> Terms </a>
                  |    <a href="<?php echo e(route('customer.show_page_policy','privacy-policy')); ?>">Privacy </a> |    <a href="<?php echo e(route('customer.show_page_policy','shipping')); ?>">Shipping </a>|    <a href="<?php echo e(route('customer.show_page_policy','return-policy')); ?>">Refund/Return Policy</a>
              </p>
              <p>© 2023 Photonplay Systems Inc. All right reserved</p>
          </div>
       </div>
<?php /**PATH C:\xampp\htdocs\photonplay\resources\views/customer/layout2/footer.blade.php ENDPATH**/ ?>