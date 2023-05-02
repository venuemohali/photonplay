@php
use App\Models\Setting;
use App\Models\Category;
use App\Models\Blog;
$setting = Setting::first();
$categories = Category::select('title')->take(3)->get();
$blogs = Blog::select('slug','title')->take(4)->get();
@endphp

<!-- _____________________ourclint-last-end___________________ -->
    <section class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="subscribe-wrapper text-center">
                    <h3 class="subscribe-title">Don’t miss our weekly updates about <br>
                        New Products</h3>
                    <form action="{{route('customer.newsletter.store')}}" class="subscribr-form" method="post">
                        @csrf
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
        <div class="footer-section-inner d-lg-flex">
            <div class="footer-item mb-0 mb-md-5 footer-item-1">
                <div class="logo-bottom mb-lg-4">
                    <img src="{{asset('assets\customer\images\logo-dark.png')}}" alt="">
                </div>
                <div class="description">
                    PHOTONPLAY is a family owned, India based design, develop and manufacturing of Systems for the ITS
                    industry since 2006. With subsidiary offices in US, Australia and Norway plus distribution facility
                    in
                    the US and representatives all over the world, PHOTONPLAY has satisfied customers (System
                    integrators,
                    Govt Authorities, OEMs and corporates) in over 30 countries worldwide.
                </div>
                <ul class="social-media pt-md-5 py-4">
                    <li><a href="{{$setting->facebook ?? ''}}"><img src="{{asset('assets\customer\images\facebook.svg')}}" /></a></li>
                    <li><a href="{{$setting->twitter  ?? ''}}"><img src="{{asset('assets\customer\images\twitter.jpg')}}" /></a></li>
                    <li><a href="{{$setting->linkedin ?? ''}}"><img src="{{asset('assets\customer\images\linkdin.jpg')}}" /></a></li>
                    <li><a href="{{$setting->instagram ?? ''}}"><img src="{{asset('assets\customer\images\instagram.png')}}" /></a></li>
                </ul>
            </div>
            <div class="footer-item mb-0 mb-md-5 footer-item-2">
                <h2 class="text-uppercase">SOLUTIONS</h2>
                <ul class="p-0">
                    <li><a href="{{route('customer.solution.highway')}}">Highway</a></li>
                    <li><a href="{{route('customer.solution.tunnel')}}">Tunnels</a></li>
                    <li><a href="{{route('customer.solution.city')}}">Smart Cities</a></li>
                    <li><a href="{{route('customer.solution.transit')}}">Transit</a></li>
                </ul>
            </div>
            <div class="footer-item mb-0 mb-md-5 footer-item-three">
                <h2>SHOP</h2>
                <ul class="p-0">
                    @forelse ($categories as $category)
                    <li><a>{{$category->title}}</a></li>
                    @empty

                    @endforelse
                </ul>
            </div>
            <div class="footer-item mb-0 mb-md-5 footer-item-four">
                <h2>NEWS & EVENTS</h2>
                <ul class="p-0">
                    @forelse ($blogs as $blog)
                    <li><a href="{{$blog->slug}}">{{$blog->title}}</a></li>
                    @empty

                    @endforelse

                </ul>
            </div>
            <div class="footer-item mb-0 mb-md-5 footer-item-5">
                <h2>Get in Touch with Us</h2>
                <div class="contact-info">
                    <div class="contact-info-item">
                        @if ($setting)
                        <a href="tel:{{$setting->sales_phone}}"><img src="{{asset('assets\customer\images\phone.svg')}}" /> {{$setting->sales_phone}}</a>
                        @if ($setting->support_phone !=null)
                        <a href="tel:{{$setting->support_phone}}"><img src="{{asset('assets\customer\images\phone.svg')}}" /> {{$setting->support_phone}}</a>
                        @endif
                        <a href="mailto:{{$setting->sales_email}}"><img src="{{asset('assets\customer\images\message.png')}}" /> {{$setting->sales_email}}</a>
                        @endif
                    </div>
                    <a href="{{route('customer.contact.us')}}" class="btn btn-primary mt-3">Contact Now</a>
                </div>
            </div>
        </div>
    </footer>

    <section class="sec-copyright py-3 border-top px-2 text-center">
        <div>Photon Play Systems - © 2023 All Rights Reserved <a href="#">Privacy Policy</a></div>
    </section>
