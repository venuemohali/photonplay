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
                        <span>( 150+ Customers Revddddddddddddiews)</span>
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
                                                   id="{{$specilization->id}}" type="button" value="{{$option->id}}" onclick="GetSelected(this)" > {{$option->specializationoptions->option}} (+${{$option->specialization_price}})
                                        </p>
                                    @endforeach
                                    <!-- <p class="mb-0"><input type="checkbox"> 6 Days
                                            (+$50)
                                        </p> -->
                                </div>
                            </div>
                            @endforeach
                            {{-- Loop to end Specifications--}}
                           
                            <div class="mt-4">
                                <h6 class="text-dark fw-bold">Faceplate (Select color):</h6>
                             <div class="d-flex align-items-center justify-content-between">
                           <div class="selected-anc">
                            <!-- <label for="select-color" class="form-select shadow-none border">Open this select menu</label> -->
                           <select class="form-select shadow-none border" id="select-color" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1"> <img src="http://127.0.0.1:8000/public/assets/images/verifyyellow.png"> One</option>
  <option value="2"> <img src="{{ URL::to('/') }}/assets/images/verifyyellow.png" /> Two</option>
  <option value="3"> <img src="http://127.0.0.1:8000/public/assets/images/verifyyellow.png"> Three</option>
</select>  
                           </div>
                         
<div class="d-flex justify-content-center align-items-center">
<img src="{{ URL::to('/') }}/assets/images/heartbeat.png" class="mx-2"/>
<div class="borded-bang"></div>
<img src="{{ URL::to('/') }}/assets/images/mesenges.png" class="mx-3"/>
<div class="borded-bang"></div>
<img src="{{ URL::to('/') }}/assets/images/add-to-cart (2).png" class="mx-2"/>
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
                        {!! $product->description!!}}
                    </div>
                    <div class="tab-pane fade mt-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"> {!!$product->specification!!}}</div>
                    <div class="tab-pane fade mt-3" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">   {!!$product->feature!!}}</div>
                    <div class="tab-pane fade mt-3" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0"> {!!$product->power_option!!}} </div>
                    <div class="tab-pane fade mt-3" id="contact-tab-panel" role="tabpanel" aria-labelledby="visibility-tab " tabindex="0">  {!!$product->visibility!!}} </div>
                    <div class="tab-pane fade mt-3" id="deal-tab" role="tabpanel" aria-labelledby="deal-tabish" tabindex="0"> {!!$product->ideal_for!!}}</div>
                </div>
            </div>
        </div>
    </div>
</section>

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

                    },
                });
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
