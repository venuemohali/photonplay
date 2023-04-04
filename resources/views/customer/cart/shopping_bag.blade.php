@include('customer.layouts.header')

<!-- header-end -->
<!-- Tabber-start -->
<section class="stepper-form-tabber pt-3 pb-0">
    <div>
        <ul class="d-flex justify-content-center justify-content-md-between tabber-list-container flex-wrap">
            <li @if(Request::is('shopping-bag')) class="active" @endif>01 SHOPPING BAG <span class="d-block">Manage Your Items List</span></li>
            <li>02 SHIPPING AND CHECKOUT <span class="d-block">Checkout your items list</span></li>
            <li>03 CONFIRMATION<span class="d-block">Review and submit Your order</span></li>
        </ul>
    </div>
</section>

<!-- Form -->
<section class="step-formation bg-light pb-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 table-responsive">
                <table class="table border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-capitalize text-center">Product</th>
                            <th scope="col" class="text-capitalize text-center">price</th>
                            <th scope="col" class="text-capitalize text-center">quantity</th>
                            <th scope="col" class="text-capitalize text-center">total price</th>
                            <th scope="col" class="text-capitalize text-center">remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!Session::get('user'))
                        @forelse ($carts as $key => $cart)
                        <tr>
                            <td class="border border-end">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('storage/'.$cart->cover_image)}}" alt="Not Found" class="profile-table me-2" width="50px">
                                    <div class="d-flex flex-column">
                                        <h6 class="text-uppercase">{{$cart->category}}</h6>
                                        <span>Brand : {{$cart->title}}</span>
                                        {{-- <span>Model: ---</span> --}}
                                        <span>Color : ----</span>
                                    </div>
                                </div>
                            </td>
                            <td class="border border-end text-center">${{$cart->price}}</td>
                            <td class="border border-end text-center">{{$cart->quantity}}</td>
                            <td class="border border-end text-center">${{$cart->price * $cart->quantity}}</td>
                            <td class="border border-end text-center"><a href="{{route('customer.remove.cartitem', $key)}}"><img src="{{asset('assets/customer/images/crosss.png')}}" alt="Not Found" class="cartItem"></a>

                            </td>
                        </tr>
                        @empty
                        <tr >
                        <td colspan="5" align="center" > <span class="h6"> No Item in cart </span></td>
                        </tr>
                        @endforelse
                        @else

                        @forelse ($cart_table as $key => $cart)
                        <tr>
                            <td class="border border-end">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('storage/'.$cart->cover_image)}}" alt="Not Found" class="profile-table me-2" width="50px">
                                    <div class="d-flex flex-column">
                                        <h6 class="text-uppercase">{{$cart->category}}</h6>
                                        <span>Brand : {{$cart->title}}</span>
                                        {{-- <span>Model: ---</span> --}}
                                        <span>Color : ----</span>
                                    </div>
                                </div>
                            </td>
                            <td class="border border-end text-center">${{$cart->price}}</td>
                            <td class="border border-end text-center">{{$cart->quantity}}</td>
                            <td class="border border-end text-center">${{$cart->price * $cart->quantity}}</td>
                            <td class="border border-end text-center"><a href="{{route('customer.delete.cart.table.item', $cart->id)}}"><img src="{{asset('assets/customer/images/crosss.png')}}" alt="Not Found" class="cartItem"></a>

                            </td>
                        </tr>
                        @empty
                        <tr >
                        <td colspan="5" align="center" > <span class="h6"> No Item in cart </span></td>
                        </tr>
                        @endforelse
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- End Form -->
<section class="step-form bg-light pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-coupon bg-white p-3 py-4 h-100">
                            <h3>coupon discount</h3>
                            <label class="d-block mb-3 opacity-50">Enter your coupon code if you have one!</label>
                            <input type="text" class="form-control rounded-0 mb-4" placeholder="Enter your code here.">
                            <button class="btn btn-primary rounded-0 ">Apply Coupon</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-details bg-white p-3 py-4">
                            <h3>payment details</h3>
                            <ul class="order-details p-0 mb-5">
                                <li class="d-flex justify-content-between">
                                    <span class="text">Cart Subtotal</span>
                                    <span class="text-amount">${{Session::get('cart_price') ?? 0}}</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span class="text text-capitalize">Shipping and Handing</span>
                                    <span class="text-amount">${{$taxes->shipping_time ?? 00.00}}</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span class="text text-capitalize">Tax/GST</span>
                                    <span class="text-amount">${{$taxes->gst ?? 00.00}}</span>
                                </li>

                                <li class="d-flex justify-content-between active">
                                    <span class="text text-capitalize fw-bold">Order total</span>
                                    <span class="text-amount">${{Session::get('cart_price') + ($taxes->gst ?? 00.00) + ($taxes->shipping_time ?? 00.00)}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box-coupon bg-white p-3 py-4 my-5">
                            <h3>Checkout</h3>
                            <label for="" class=" d-block mb-4 opacity-50">any short ingo line if </label>
                            <button class=" btn btn-primary rounded-0">Proceed to buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('customer.layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function(){
    $('.cartItem').on('click', function(){
        console.log($('.cartItem').val());
    });
  });
</script>
