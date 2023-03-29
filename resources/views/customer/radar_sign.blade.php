@include('customer.layouts.header')

<!-- Our Product-start -->
<section class="pt-0 pb-0">
        <ul class="list-style-ul pt-2 m-0 pb-2 d-flex justify-content-center align-items-center flex-wrap">
            <li>iCop 1200 </li>
            <li>iCop1200M</li>
            <li>iCop1500</li>
            <li>iCop1500M</li>
            <li>iCop1800M</li>
        </ul>
    </section>
    <!-- End Varient Section -->
    <!-- Our Product-start -->
    <section class="our-product pt-lg-4 pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                <form action="{{route('customer.store.shopping.bag')}}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}">
                    <input type="hidden" name="title" id="title" value="{{$product->title}}">
                    <input type="hidden" name="category" id="category" value="{{$product->category->title}}">
                    <input type="hidden" name="price" id="price" value="{{$product->price}}">
                    <input type="hidden" name="cover_image" id="cover_image" value="{{$product->cover_image}}">
                    <div class="responsive-two">
                        <div>
                            <div class="p-2">
                                <div class="img-leften">
                                    <img src="{{ asset('storage/'. $product->cover_image) }}" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="p-2">
                                <div class="img-leften">
                                    <img src="{{asset('assets\customer\images\Product-sign.png')}}" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="p-2">
                                <div class="img-leften">
                                    <img src="{{asset('assets\customer\images\Product-sign.png')}}" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="p-2">
                                <div class="img-leften">
                                    <img src="{{asset('assets\customer\images\Product-sign.png')}}" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="p-2">
                                <div class="img-leften">
                                    <img src="{{asset('assets\customer\images\Product-sign.png')}}" alt="Not Found" class="img-fluid">
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
                        <h4>{{$product->category->title}}</h4>
                        <span class="text-capitalize d-block">
                            {{$product->title}}
                        </span>
                        <div class="d-flex justify-content-start align-items-center">
                            <img src="{{asset('assets\customer\images\star.svg')}}" alt="Not Found" class="img-fluid" width="14px">
                            <img src="{{asset('assets\customer\images\star.svg')}}" alt="Not Found" class="img-fluid" width="14px">
                            <img src="{{asset('assets\customer\images\star.svg')}}" alt="Not Found" class="img-fluid" width="14px">
                            <img src="{{asset('assets\customer\images\star.svg')}}" alt="Not Found" class="img-fluid" width="14px">
                            <img src="{{asset('assets\customer\images\star.svg')}}" alt="Not Found" class="img-fluid" width="14px">
                            <span>( 150+ Customers Reviews)</span>
                        </div>
                        <p class="fw-bold fs-5">${{$product->price}}</p>
                        <div>
                            <p class="specific-heading">Select Specification</p>
                            <div class="row mt-3">

                                {{-- Loop to Start Specifications--}}
                                @for($i=0;$i<10;$i++)
                                <div class="col-md-6 mb-3">
                                    <div class="specification p-3 ">
                                        <h6> <img src="{{asset('assets\customer\images\low-battery.png')}}" alt="Not Found" class="me-2 " > Batteries </h6>
                                        <p> <input type="checkbox" > 3 Days (+$0)
                                        </p>
                                        <p class="mb-0"><input type="checkbox"> 6 Days
                                            (+$50)
                                        </p>
                                    </div>
                                </div>
                                @endfor
                                {{-- Loop to end Specifications--}}
                            </div>


                            <div class="d-md-flex justify-content-between align-items-center gap-3 mb-3">
                                <div class="specification p-3 w-100">
                                    <h6> <img src="{{asset('assets\customer\images\low-battery.png')}}" alt="Not Found" class="me-2"> Batteries </h6>
                                    <p> <input type="checkbox"> 3 Days (+$0)
                                    </p>
                                    <p class="mb-0"><input type="checkbox"> 6 Days
                                        (+$50)
                                    </p>
                                </div>
                                <div class="specification p-3 w-100 mt-4 mt-md-0">
                                    <h6> <img src="{{asset('assets\customer\images\cloud.png')}}" alt="Not Found" class="me-2">
                                        Cloud-Access
                                    </h6>
                                    <p> <input type="checkbox"> No (+$0)
                                    </p>
                                    <p class="mb-0"><input type="checkbox">
                                        Yes (+$80)
                                    </p>
                                </div>
                            </div>



                            <div class="d-md-flex justify-content-between align-items-center gap-3 mb-3">
                                <div class="specification p-3 w-100">
                                    <h6> <img src="{{asset('assets\customer\images\power-button.png')}}" alt="Not Found" class="me-2">
                                        Power
                                    </h6>
                                    <p> <input type="checkbox"> Solar (+$0)
                                    </p>
                                    <p class="mb-0"><input type="checkbox">
                                        AC (+$50)
                                    </p>
                                </div>
                                <div class="specification p-3 w-100 mt-4 mt-md-0">
                                    <h6> <img src="{{asset('assets\customer\images\settings.png')}}" alt="Not Found" class="me-2">
                                        Accessories
                                    </h6>
                                    <p> <input type="checkbox"> Pole Mount
                                        (+$0)</p>
                                    <p class="mb-0"><input type="checkbox"> Dolly (+$30)
                                    </p>
                                </div>
                            </div>
                            <div>
                                <p class="specific-heading">Select Specification</p>
                                <div class="d-flex justify-content-between">
                                    <div></div>
                                    <div class="d-flex gap-3">
                                        <img src="{{asset('assets\customer\images\message-two.png')}}" alt="Not Found" class="img-fluid">
                                        <img src="{{asset('assets\customer\images\heart.png')}}" alt="Not Found">
                                        <img src="{{asset('assets\customer\images\add-to-cart (1).svg')}}" alt="Not Found"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <p class="mt-4">Comes with multiple power options such as Standalone Solar powered
                                    operations.
                                    Shipping : 7-10 Working Days.</p>
                            </div>
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
                            <p class="fw-bold fs-5 mb-0 py-lg-0 py-3">{{$product->category->title}} | {{$product->title}}</p>
                            <p class="mb-0 opacity-50">Yellow | 3 Days Batteries | Solar Powered | Pole Mount | 2
                                years
                                warranty</p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-4">
                    <div class="d-md-flex  justify-content-end mt-lg-0 mt-4 buy-right align-items-center">
                        <a class="btn" onclick="increment()">+</a>
                        <input id=demoInput type=number name="quantity" value="1" min=1 max=100>
                            <a class="btn" onclick="decrement()">-</a>
                        <div class=" px-4 py-lg-0 py-4">
                            <span class="one-thoshand">${{$product->price}}</span>
                        </div>
                        <button type="submit" class="btn btn-dark rounded-0 text-nowrap align-self-center px-4">Buy Now</button>
                    </div>
                </div>
            </form>

                <!-- </div> -->
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <!-- Tabber -->
            <div class="tabber-item opacity-50">
                Luctus et ultrices posuere cubilia Curae. Donec nibh sapien, molestie quis elementum et, dignissim non
                atino ipsum. Pesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                Donec sed mauris lorem. Sed sit ammauris eu purus consectetur blandit sed et lacus.
                Cras tellus enim, sagittis aer varius faucibus, molestie in dolor. Mauris molliadipisg elit, in
                vulputate est volutpat vitae. Pellentesque convallis nisl sit amet lacus luctus vel consequat ligula
                suscipit. Aliquam et metus sed tortor eleifend pretium non id urna. Fusce in augue leo, sed cursus nisl.
                Nullam vel tellus massa. Vivamus porttitor rutrum libero ac mattis. Aliquam congue malesuada mauris
                vitae dignissim.
                Mauris vehicula placerat justo ac cursus. Ut interdum tortor quis elit varius rhoncus. Etiam ut tellus
                at ligula eleifend malesuada. Aenean et metus sapien.
            </div>
            <!-- End Tabber -->
        </div>
    </section>
    <!-- improving-section-start -->
    <section class="imroving">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-md-flex align-items-center justify-content-between">
                        <div class="text-white">
                            <p class="fw-bold fs-5 mb-0 py-lg-0 py-3">RADAR SPEED SIGN | R1200</p>
                            <span>Our team of experts will help you out with the deployment strategy</span>
                        </div>
                        <div class="py-4">
                            <button class="btn btn-light rounded-5 px-4 py-3">Contact Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- improving-section-end -->
    <!-- Our Product -->

    <section class="sec-copyright py-3 border-top px-2 text-center">
        <div>Photon Play Systems - © 2023 All Rights Reserved <a href="#">Privacy Policy</a></div>
    </section>

@include('customer.layouts.footer')
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
</script>
