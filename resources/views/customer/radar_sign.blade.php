@php
foreach($product->specilizations as $specilization){
foreach($specilization->options as $option){
    //dd($option);
}
}
@endphp
@include('customer.layouts.header')

<!-- Our Product-start -->
<section class="pt-0 pb-0">
    <ul class="list-style-ul pt-2 m-0 pb-2 d-flex justify-content-center align-items-center flex-wrap">
        @forelse ($productLists as $list)
            <a href="{{route('customer.radar.sign', $list->id)}}" style="text-decoration: none;"><li class="p-4">{{$list->title}}</li></a>
        @empty

        @endforelse
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
                    <div id="dynamic_specs">

                    </div>
                    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                            @foreach ($product->specilizations as $specilization)
                            <div class="col-md-6 mb-3">
                                <div class="specification p-3 ">
                                    <h6> <img src="{{asset('assets\customer\images\low-battery.png')}}" alt="Not Found" class="me-2 "> {{$specilization->specilization->title}} </h6>
                                    @foreach($specilization->options as $option)
                                        <p> <input type="checkbox" name="{{$specilization->id}}"
                                                   id="{{$specilization->id}}" type="button" title="{{$option->specialization_price}}" value="{{$option->id}}" onclick="GetSelected(this)" > {{$option->specializationoptions->option}} (+${{$option->specialization_price}})
                                        </p>
                                    @endforeach
                                    <!-- <p class="mb-0"><input type="checkbox"> 6 Days
                                            (+$50)
                                        </p> -->
                                </div>
                            </div>
                            @endforeach
                            {{-- Loop to end Specifications--}}
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
                        <p class="mb-0 opacity-50">{{$product->color}} | {{$product->warranty}}
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
                        <span class="one-thoshand" id="total_price">${{$product->price}}</span>
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
            {{$product->description}}
        </div>
        <!-- End Tabber -->
    </div>
</section>
<!-- improving-section-start -->

@include('customer.layout2.footer')
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
                // console.log(radio.value)
                // return
                dict[radio.id] = radio.value;
                $.ajax({
                    url: '{{ route('customer.specification.ajax') }}',
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
                        let innerPrice=document.getElementById("total_price")
                        innerPrice.innerHTML=`$${Number(innerPrice.innerHTML.slice(1,innerPrice.length))+Number(radio.title)}`
                    },
                });
                console.log(radio.innerHTML)
            }else {
               let val= dict[radio.id];
               if(val==radio.value){
                   delete dict[radio.id];
               }
               $.ajax({
                    url: '{{ route('customer.specification.ajax') }}',
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
                        let innerPrice=document.getElementById("total_price")
                        innerPrice.innerHTML=`$${Number(innerPrice.innerHTML.slice(1,innerPrice.length))-Number(radio.title)}`
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
