@include('customer.layout2.header')
    <!-- Contact Us Banner start -->
    <section class="contact us">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="text-center mb-lg-5 mb-5">
                        <h2 class="fs-2   mt-3">Contact Us</h2>
                        <p class="text-mutedd">We are waiting to help you and your team
                            <br> so don't hesitate to reach out!
                        </p>
                    </div>
                    <div
                        class="d-flex justify-content-center align-items-center gap-5 contact-peraa my-lg-5 contact-wrapper">
                        <div
                            class="d-flex justify-lg-content-center justify-content-start align-items-center gap-3 w-100">
                            <img src="{{asset('assets\customer\images\iconmap.png')}}" alt="Not Found">
                            <p class="mb-0">{{$setting->company_address}}
                            </p>
                        </div>
                        <div
                            class="d-flex justify-lg-content-center justify-content-start align-items-center gap-3 w-100">
                            <img src="{{asset('assets\customer\images\iconTelephone.png')}}" alt="Not Found">
                            <p class="mb-0">
                            {{$setting->sales_phone}}
                            </p>
                        </div>
                        <div
                            class="d-flex justify-lg-content-center justify-content-start align-items-center gap-3 w-100">
                            <img src="{{asset('assets\customer\images\iconmessagesss.png')}}" alt="Not Found">
                            <p class="mb-0">
                            {{$setting->support_email}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Banner End -->
    <!-- map-Contact-start -->
    <section class="map-wrapper pt-0">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="inner-map">
                        <iframe class="w-75 py-5"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13686.924581218746!2d75.88485906787676!3d30.950072544206556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a84a965aaa167%3A0x5b0c9401857ab0e8!2sMeharban%2C%20Punjab%20141007!5e0!3m2!1sen!2sin!4v1681919215477!5m2!1sen!2sin"
                            height="700" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <form action="{{route('customer.inquery.submit')}}" method="post">
                                @csrf
                                <div class="map-messanger shadow p-5 my-4">
                                    <h6 class="mb-4">Send us a message</h6>
                                    <div class="">
                                        <div class="d-flex justify-content-between ">
                                            <div class="placeholder-names">
                                                <span class="d-block text-secondary">Full Name</span>
                                                <b><input name="first_name" type="text" placeholder="Jimmy Newtron" class="border-0 shadow-none">
                                                </b>
                                            </div>
                                            <div>
                                                <div class="placeholder-names">
                                                    <span class="d-block text-secondary">Email Address</span>
                                                    <span class="d-block text-secondary"></span>
                                                    <b><input name="email" type="text" placeholder="jimmynewtron@mail.com" class="border-0 shadow-none">
                                                    </b>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between my-4">
                                            <div class="placeholder-names">
                                                <span class="d-block text-secondary">Phone Number</span>
                                                <b><input name="phone_number" type="text" placeholder="+12 3456 789" class="border-0 shadow-none">
                                                </b>
                                            </div>
                                            <div class="placeholder-names">
                                                <span class="d-block text-secondary">Company Name</span>
                                                <b><input name="company_name" type="text" placeholder="Workgroup Studios" class="border-0 shadow-none">
                                                </b>
                                            </div>
                                            
                                        </div>
                                        <div class="message-last py-5">
                                            <textarea name="message" class="form-control rounded-0 mb-4" rows="4" placeholder="Message" aria-describedby="textHelpBlock"></textarea>
                                        </div>
                                        
                                        <div class="d-flex align-items-center justify-content-between pt-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                                    checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Accept terms & conditions
                                                </label>
                                            </div>
                                            <button class="btn btn-primary text-uppercase">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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

        $('.clint-wrapperr').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
            arrows: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.key-slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.clints-content').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        })
        window.addEventListener('click', function (e) {
            if (window.innerWidth > 992) {
                if ($('.navbar-collapse').hasClass('show')) {
                    $('.navbar-toggler').click();
                }
            }

        })

        // Hover attribute
        $('.dropdown .dropdown-toggle').mouseenter(function () {
            if (window.innerWidth > 991) {
                $(this).addClass('show');
                $(this).attr({
                    'aria-expanded': true
                })
                $(this).siblings('.dropdown-menu').addClass('show');
                $(this).siblings('.dropdown-menu').attr({
                    'data-bs-popper': "static"
                })
            }

        });
        $('.dropdown-menu').mouseleave(function () {
            if (window.innerWidth > 991) {
                $(this).removeAttr('data-bs-popper');
                $(this).siblings('.nav-link ').removeClass('show');
                $(this).removeClass('show');
                $(this).siblings('.nav-link').attr({
                    'aria-expanded': false
                });
            }

        })
        $('.mega-menu h4').click(function () {
            // $(this).siblings('ul').slideDown();
            if ($(this).parent().hasClass('active')) {
                $(this).parent().removeClass('active')
            } else {
                $(this).parent().addClass('active');
            }
            $(this).parent().siblings().removeClass('active');
        });

        $('.toggler-mega').click(function () {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active')
                $('.mega-menu').slideUp();
            } else {
                $(this).addClass('active');
                $('.mega-menu').slideDown();
            }

        })
        $('.mega-menu-parent > h4').click(function () {
            var bodyColor = $('.drop-downs').attr("style");
            // console.log(bodyColor)
            if (bodyColor === 'display: block;') {
                $('.drop-downs').slideUp(200);
                $('.mega-menu-item').removeClass('active');
                // $('.toggler-mega').removeClass('active')
                return;
            }
            $('.drop-downs').slideDown(200);

        })
        // $('.mega-menu .col-md-2 > h4').click( function(){
        //     $(this).siblings('ul').slideDown();
        //     console.log(this)
        // })
    </script>
