<?php
foreach($product->specilizations as $specilization){
foreach($specilization->options as $option){
    //dd($option);
}
}
?>
<?php echo $__env->make('customer.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Our Product-start -->
<section class="pt-0 pb-0">
    <ul class="list-style-ul pt-2 m-0 pb-2 d-flex justify-content-center align-items-center flex-wrap">
        <?php $__empty_1 = true; $__currentLoopData = $productLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('customer.radar.sign', $list->id)); ?>" style="text-decoration: none;"><li class="p-4"><?php echo e($list->title); ?></li></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <?php endif; ?>
    </ul>
</section>
<!-- End Varient Section -->
<!-- Our Product-start -->
<section class="our-product pt-lg-4 pt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <form action="<?php echo e(route('customer.store.shopping.bag')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div id="dynamic_specs">

                    </div>
                    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="product_id" id="product_id" value="<?php echo e($product->id); ?>">
                    <input type="hidden" name="title" id="title" value="<?php echo e($product->title); ?>">
                    <input type="hidden" name="category" id="category" value="<?php echo e($product->category->title); ?>">
                    <input type="hidden" name="price" id="price" value="<?php echo e($product->price); ?>">
                    <input type="hidden" name="cover_image" id="cover_image" value="<?php echo e($product->cover_image); ?>">
                    <div class="responsive-two">
                        <div>
                            <div class="p-2">
                                <div class="img-leften">
                                    <img src="<?php echo e(asset('storage/'. $product->cover_image)); ?>" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="p-2">
                                <div class="img-leften">
                                    <img src="<?php echo e(asset('assets\customer\images\Product-sign.png')); ?>" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="p-2">
                                <div class="img-leften">
                                    <img src="<?php echo e(asset('assets\customer\images\Product-sign.png')); ?>" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="p-2">
                                <div class="img-leften">
                                    <img src="<?php echo e(asset('assets\customer\images\Product-sign.png')); ?>" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="p-2">
                                <div class="img-leften">
                                    <img src="<?php echo e(asset('assets\customer\images\Product-sign.png')); ?>" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <div>
                            <div class="slider-item"></div>
                        </div>
                        <div>
                            <div class="slider-item"></div>
                        </div>
                        <div>
                            <div class="slider-item"></div>
                        </div>
                        <div>
                            <div class="slider-item"></div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="multiple-optionn pb-0 pt-lg-0 pt-5 pb-0">
                    <h4><?php echo e($product->category->title); ?></h4>
                    <span class="text-capitalize d-block">
                        <?php echo e($product->title); ?>

                    </span>
                    <div class="d-flex justify-content-start align-items-center">
                        <img src="<?php echo e(asset('assets\customer\images\star.svg')); ?>" alt="Not Found" class="img-fluid" width="14px">
                        <img src="<?php echo e(asset('assets\customer\images\star.svg')); ?>" alt="Not Found" class="img-fluid" width="14px">
                        <img src="<?php echo e(asset('assets\customer\images\star.svg')); ?>" alt="Not Found" class="img-fluid" width="14px">
                        <img src="<?php echo e(asset('assets\customer\images\star.svg')); ?>" alt="Not Found" class="img-fluid" width="14px">
                        <img src="<?php echo e(asset('assets\customer\images\star.svg')); ?>" alt="Not Found" class="img-fluid" width="14px">
                        <span>( 150+ Customers Revddddddddddddiews)</span>
                    </div>
                    <p class="fw-bold fs-5">$<?php echo e($product->price); ?></p>
                    <div>
                        <p class="specific-heading">Select Specification</p>
                        <div class="row mt-3">

                            
                            <?php $__currentLoopData = $product->specilizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specilization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 mb-3">
                                <div class="specification p-3 ">
                                    <h6> <img src="<?php echo e(asset('assets\customer\images\low-battery.png')); ?>" alt="Not Found" class="me-2 "> <?php echo e($specilization->specilization->title); ?> </h6>
                                    <?php $__currentLoopData = $specilization->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p> <input type="checkbox" name="<?php echo e($specilization->id); ?>"
                                                   id="<?php echo e($specilization->id); ?>" type="button" value="<?php echo e($option->id); ?>" onclick="GetSelected(this)" > <?php echo e($option->specializationoptions->option); ?> (+$<?php echo e($option->specialization_price); ?>)
                                        </p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- <p class="mb-0"><input type="checkbox"> 6 Days
                                            (+$50)
                                        </p> -->
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                           
                            <div class="mt-4">
                                <h6 class="text-dark fw-bold">Faceplate (Select color):</h6>
                             <div class="d-flex align-items-center justify-content-between">
                           <div class="selected-anc">
                            <!-- <label for="select-color" class="form-select shadow-none border">Open this select menu</label> -->
                           <select class="form-select shadow-none border" id="select-color" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1"> <img src="http://127.0.0.1:8000/public/assets/images/verifyyellow.png"> One</option>
  <option value="2"> <img src="<?php echo e(URL::to('/')); ?>/assets/images/verifyyellow.png" /> Two</option>
  <option value="3"> <img src="http://127.0.0.1:8000/public/assets/images/verifyyellow.png"> Three</option>
</select>  
                           </div>
                         
<div class="d-flex justify-content-center align-items-center">
<img src="<?php echo e(URL::to('/')); ?>/assets/images/heartbeat.png" class="mx-2"/>
<div class="borded-bang"></div>
<img src="<?php echo e(URL::to('/')); ?>/assets/images/mesenges.png" class="mx-3"/>
<div class="borded-bang"></div>
<img src="<?php echo e(URL::to('/')); ?>/assets/images/add-to-cart (2).png" class="mx-2"/>
    <!-- <img src={}"http://127.0.0.1:8000/public/assets/images/verifyyellow.png"> -->
   
</div>
</div>
<p class="mt-4">Comes with multiple power option such as Standalone Salar powered operations. <br>
Shipping:7-10 Working Days.
</p>
                            </div>
                        </dsiv>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>
    <!-- order summery-end -->
</section>
<section class="pt-lg-4 order-summery pb-4 border-bottom pt-5">
    <!-- order summery-start -->
    <div class="container-fluid">
        <div class="row w-100">
            <!-- <div class=" px-3"> -->
            <div class="col-lg-8 col-md-8">
                <div class="d-flex align-items-md-center order-summery ">
                    <span class="border-1 border-right d-block  pe-lg-5 pe-4">Order
                        Summary</span>
                    <div class="border-left  ">
                        <p class="fw-bold fs-5 mb-0 py-lg-0 py-3"><?php echo e($product->category->title); ?> | <?php echo e($product->title); ?></p>
                        <p class="mb-0 opacity-50"><?php echo e($product->color); ?> | <?php echo e($product->warranty); ?>

                            Warranty</p>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-4">
                <div class="d-md-flex  justify-content-end mt-lg-0 mt-4 buy-right align-items-center">
                    <a class="btn" onclick="increment()">+</a>
                    <input id=demoInput type=number name="quantity" value="1" min=1 max=100>
                    <a class="btn" onclick="decrement()">-</a>
                    <div class=" px-4 py-lg-0 py-4">
                        <span class="one-thoshand">$<?php echo e($product->price); ?></span>
                    </div>
                    <button type="submit" class="btn btn-dark rounded-0 text-nowrap align-self-center px-4">Buy Now</button>
                </div>
            </div>
            </form>

            <!-- </div> -->
        </div>
    </div>
</section>


<!-- improving-section-start -->


<section>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-12'>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark active ms-0" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            description
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            Specifications
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                            Features
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">
                            Power option
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark" id="visibility-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-panel" type="button" role="tab" aria-controls="contact-tab-panel" aria-selected="false">
                            Visibility
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark" id="deal-tabish" data-bs-toggle="tab" data-bs-target="#deal-tab" type="button" role="tab" aria-controls="deal-tab" aria-selected="false">
                            Deal For
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane mt-3 fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <?php echo $product->description; ?>}
                    </div>
                    <div class="tab-pane fade mt-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"> <?php echo $product->specification; ?>}</div>
                    <div class="tab-pane fade mt-3" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">   <?php echo $product->feature; ?>}</div>
                    <div class="tab-pane fade mt-3" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0"> <?php echo $product->power_option; ?>} </div>
                    <div class="tab-pane fade mt-3" id="contact-tab-panel" role="tabpanel" aria-labelledby="visibility-tab " tabindex="0">  <?php echo $product->visibility; ?>} </div>
                    <div class="tab-pane fade mt-3" id="deal-tab" role="tabpanel" aria-labelledby="deal-tabish" tabindex="0"> <?php echo $product->ideal_for; ?>}</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('customer.layout2.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $('.responsive-two').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        dots: false,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.responsive-two',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        autoplay: true,
        arrows: false
    });

    function increment() {
        document.getElementById('demoInput').stepUp();
    }

    function decrement() {
        document.getElementById('demoInput').stepDown();
    }

    var dict = {};
    function GetSelected(radio) {
            var chected = new Array();
            if(radio.checked){
                dict[radio.id] = radio.value;
                $.ajax({
                    url: '<?php echo e(route('customer.specification.ajax')); ?>',
                    type: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {dict: dict},
                    success: function(response) {
                        // console.log(response);
                        $('#dynamic_specs').html("");
                        var input = document.createElement("input");
                        input.type = "hidden";
                        input.name = "dynamic_spec[]";
                        input.value = response;
                        document.getElementById("dynamic_specs").appendChild(input);

                    },
                });
            }else {
               let val= dict[radio.id];
               if(val==radio.value){
                   delete dict[radio.id];
               }
               $.ajax({
                    url: '<?php echo e(route('customer.specification.ajax')); ?>',
                    type: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {dict: dict},
                    success: function(response) {
                        $('#dynamic_specs').html("");
                        var input = document.createElement("input");
                        input.type = "hidden";
                        input.name = "spec[]";
                        input.value = response;
                        document.getElementById("dynamic_specs").appendChild(input);
                    },
                });
            }
            // console.log('specfications', dict);

        const checkboxes = document.querySelectorAll(`input[name="${radio.id}"]`);
            // console.log(checkboxes);
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('click', () => {
                if (checkbox.checked) {
                    checkboxes.forEach((otherCheckbox) => {
                        if (otherCheckbox !== checkbox) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });


        // $("[name='chklistitem']").each(function (index, data) {
            //     if (data.checked) {
            //
            //         chected.push(data.value +"---"+data.nextSibling.textContent);
            //     }
            // });

        }
</script>
<?php /**PATH C:\Users\The Miraj\Desktop\laravell(06-05-2023)\photonplay\resources\views/customer/radar_sign.blade.php ENDPATH**/ ?>