@include('customer.layouts.header')
    <!-- header-end -->
    <!-- banner-start -->
    <section class="overview">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="overview-headingh border-bottom border-2 pb-3">
                                <h6 class="mb-0">Account</h6>
                                <span class="f-6">{{Session::get('user')->name}}</span>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 col-12 border-end border-2">
                            <div class="review-inner ">
                                <p class="border-bottom border-1 py-3 btn-sky">Overview</p>
                                <div class="py-3  border-bottom border-1">
                                    <span>ORDERS</span>
                                    <p class="">History</p>
                                </div>
                                <div class="py-3 border-bottom border-1">
                                    <span class="text-capitalize">account</span>
                                    <p class="mb-0">Profile </p>
                                    <p class="mb-0">Saved Cards</p>
                                    <p class="mb-0">Addresses</p>
                                </div>
                                <div class="py-3">
                                    <span class="text-capitalize">LEGAL</span>
                                    <p class="mb-0">Terms of Use</p>
                                    <p class="mb-0">Privacy Policy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8  col-md-6 col-12">
                            <div class="overview-wrapper">
                                <h5 class="btn-light fs-5 py-2 ">Overview</h5>
                                <div
                                    class="banner-circle p-3 d-md-flex mt-md-0 mt-4 justify-content-between text-center">
                                    <div class="d-md-flex align-items-center justify-content-center">
                                        <div class="user-profiles me-md-2 m-auto mb-3 mb-md-0"></div>
                                        <p class="text-uppercase mb-0 ">User name</p>
                                    </div>
                                    <div class="">
                                        <span class="text-capitalize btn-light">Edit Profile</span>
                                    </div>
                                </div>
                                <div class="d-flex gap-4 mt-5">
                                    <div class="order-address text-center bg-white p-4 border">
                                        <img src="{{asset('assets\customer\images\delivery-copy.png')}}" alt="Not Found" class="mb-4">
                                        <h6>Orders</h6>
                                        <p>Check your order status</p>
                                    </div>
                                    <div class="order-address text-center bg-white p-4 border">
                                        <img src="{{asset('assets\customer\images\address-review.png')}}" alt="Not Found" class="mb-4">
                                        <h6>Addresses</h6>
                                        <p class="mb-0">Save addresses for a</p>
                                        <p class="mb-0">hassle-free checkout</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    <section class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="subscribe-wrapper text-center">
                    <h3 class="subscribe-title">Don’t miss our weekly updates about <br>
                        New Products</h3>
                    <form action="" class="subscribr-form">
                        <div class="col-lg-4 mx-auto">
                            <div class="d-flex border-bottom">
                                <input type="text" placeholder="Enter your email address..."
                                    class="bg-transparent w-100 border-0 text-white outline-0 border-0 shadow-none">
                                <button class="bg-transparent border-0 text-white p-2">SUBSCRIBE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('customer.layouts.footer')