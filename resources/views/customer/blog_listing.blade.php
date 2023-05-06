@include('customer.layout2.header')
<body>

<!-- Banner sec -->
<section class="inner-banner-bg">
    <h3 class="text-white text-center mb-0">NEWS & EVENTS</h3>
</section>
<!-- Banner Sec End -->
<section class="blog-content-list position-relative">
    <div class="social-icons position-absolute start-0">
        <img src="./assets/images/social-media iconss.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                @foreach($blogs as $s_blog)
                    <div class="post-item mb-4">
                        <a href="{{route("customer.blog_show",$s_blog->slug)}}" > <img src="{{asset("storage/".$s_blog->image)}}" alt="" class="mb-4 img-fluid w-100"> </a>
                        <div class="mb-4 pb-4 post-info">
                            <a href="{{route("customer.blog_show",$s_blog->slug)}}"   class="text-decoration-none">   <h2 class="text-uppercase"> <b>   {{$s_blog->title}} </b></h2></a>
                            <div>{{$s_blog->blog_created_date}} by {{$s_blog->author}}</div>
                            <p>
                                {{$s_blog->description}}
                            </p>
                        </div>
                        <div class="post-action d-flex justify-content-between">
                            <a href="{{route("customer.blog_show",$s_blog->slug)}}" class="text-decoration-none text-secondary">READ MORE</a>
                            <div class="post-action-fire">
                                <ul class="d-flex p-0 m-0 align-items-center">

                                    <li class="text-secondary">  <i class="bi bi-suit-heart-fill"></i> {{$s_blog->likes}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        @endforeach

                    <div class="d-flex justify-content-center ">
                        {!! $blogs->links() !!}
                    </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="search mb-5 position-relative">
                    <input type="text" placeholder="Search" class="border-0 ">
{{--                    <img src="./assets/images/search-копия.png" alt="Not Found" class="position-absolute" width="16" height="16">--}}
                    <i class="bi bi-search"></i>
                </div>
                <div class="sec-sidebar">
                    <div class="sidebar-item">
                        <div class="side-bar-title">Categories</div>
                        <ul class="m-0 p-0">
                            @foreach($categories as $category)
                                <li><a href="/blogs/category/{{$category->slug}}">{{$category->category}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="sidebar-item">
                        <div class="side-bar-title text-uppercase">RECENT POSTS</div>
                        <ul class="m-0 p-0 latest-post">
                            @foreach($latestBlogRecords as $lt_blog)
                                <li>
                                    <a hre="" class="d-flex align-items-center text-decoration-none text-secondary">
                                        <img src="{{asset("storage/".$lt_blog->image)}}" />
                                        <div class="latest-post-content ms-2">
                                            <h4>{{$lt_blog->title}}</h4>
                                            <span>
                                                <?php
                                                    $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$lt_blog->created_at);
                                                    $blog_created_date = $date->format('d F, Y');
                                                    echo $blog_created_date;
                                                    ?>
                                                </span>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
{{--                    <div class="sidebar-item">--}}
{{--                        <div class="side-bar-title">Tags</div>--}}
{{--                        <div class="tags">--}}
{{--                            <div class="mb-3">--}}
{{--                                <span>design</span>--}}
{{--                                <span>development</span>--}}
{{--                                <span>ui</span>--}}
{{--                            </div>--}}
{{--                            <span>photography</span>--}}
{{--                            <span>template</span>--}}
{{--                            <div class="mt-3"> <span>branding</span></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="sidebar-item">
                        <div class="side-bar-title">Archive</div>
                        <ul class="m-0 p-0">
                            <li><a hre="">May 2023</a></li>
                            <li><a hre="">April 2023</a></li>
                            <li><a hre="">March 2023</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- </div> -->
{{--            <div class="col-md-12 px-0">--}}
{{--                <div class="paginations">--}}
{{--                    <nav aria-label="Page navigation example">--}}
{{--                        <ul class="pagination border-0">--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link border-0 text-dark" href="#" aria-label="Previous">--}}
{{--                                        <span aria-hidden="true"><img src="./assets/images/arrowlight.jpg"--}}
{{--                                                                      alt=""></span> </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item"><a class="page-link border-0 text-dark" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link border-0 text-dark" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link border-0 text-dark" href="#">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link border-0 text-dark" href="#">_</a></li>--}}
{{--                            <li class="page-item"><a class="page-link border-0 text-dark" href="#">3</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link border-0 text-dark" href="#" aria-label="Next">--}}
{{--                                        <span aria-hidden="true"><img src="./assets/images/arrowlightright.png"--}}
{{--                                                                      alt=""></span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>

<!-- blog-banner end  -->
<section class="our-clints-last">
    <div class="mb-lg-5 text-center">
        <h2 class="fs-md-2 mt-3">Our Clients</h2>
    </div>
    <div class="container">
        <div class="px-4">
            <div class="clints-content mb-0 d-flex align-items-center">
                <div>
                    <div class="px-2 branding-diss">
                        <img src="./assets/images/adani.png" class="d-block mx-auto" />
                    </div>
                </div>
                <div>
                    <div class="px-2 branding-diss">
                        <img src="./assets/images/afkons.png" class="d-block mx-auto" />
                    </div>
                </div>
                <div>
                    <div class="px-2 branding-diss">
                        <img src="./assets/images/ASHOKA.png" class="d-block mx-auto" />
                    </div>
                </div>
                <div>
                    <div class="px-2 branding-diss">
                        <img src="./assets/images/BRO.png" class="d-block mx-auto" />
                    </div>
                </div>
                <div>
                    <div class="px-2 branding-diss">
                        <img src="./assets/images/adani.png" class="d-block mx-auto" />
                    </div>
                </div>
                <div>
                    <div class="px-2 branding-diss">
                        <img src="./assets/images/afkons.png" class="d-block mx-auto" />
                    </div>
                </div>
                <div>
                    <div class="px-2 branding-diss">
                        <img src="./assets/images/ASHOKA.png" class="d-block mx-auto" />
                    </div>
                </div>
                <div>
                    <div class="px-2 branding-diss">
                        <img src="./assets/images/BRO.png" class="d-block mx-auto" />
                    </div>
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
        autoplay: true,
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
    $('.rules-content').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
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

    $('.clints-content-gallery').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
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