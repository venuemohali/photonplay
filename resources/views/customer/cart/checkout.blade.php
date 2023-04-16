@include('customer.layouts.header')
<section class="stepper-form-tabber pt-3 pb-0">
        <div>
            <ul class="d-flex justify-content-center justify-content-md-between tabber-list-container flex-wrap">
                <li>01 SHOPPING BAG <span class="d-block">Manage Your Items List</span></li>
                <li @if(Request::is('shipping-and-checkout')) class="active" @endif>02 SHIPPING AND CHECKOUT <span class="d-block">Checkout your items list</span></li>
                <li>03 CONFIRMATION<span class="d-block">Review and submit Your order</span></li>
            </ul>
        </div>
    </section>

    <!-- Form -->
    <section class="step-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <form action="{{route('customer.place.order')}}" method="post">
                    @csrf
                    
                    <h3>billing details</h3>
                    <input type="text" class="form-control rounded-0 px-3" name="billing_street" placeholder="Street Number">
                    <input type="text" class="form-control rounded-0 px-3" name="billing_flat_suite" placeholder="Flat/Suite">
                    <input type="text" class="form-control rounded-0 px-3" name="billing_city"
                    placeholder="City">
                    <input type="text" class="form-control rounded-0 px-3" name="billing_state" placeholder="State">
                    <input type="text" class="form-control rounded-0 px-3" name="billing_country" placeholder="Country">
                    <input type="text" class="form-control rounded-0 px-3" name="billing_postcode" placeholder="Postcode">
                    <textarea name="address" class="form-control rounded-0 mt-2" rows="5"
                        placeholder="Your address here..."></textarea>
                    {{-- <h3 class="mt-5 mb-2">SHIPPING ADDRESS</h3> --}}
                    {{-- <label for=""> <input type="checkbox" class="me-2 d-inline-block">SHIP TO A DIFFERENT
                        ADDRESS?</label> --}}
                    <label class="d-block mt-3">Order notes (optional)</label>
                    <textarea name="order_notes" class="form-control rounded-0 mt-2" rows="5"
                        placeholder="Your address here..."></textarea>
                </div>
                <div class="col-md-6">
                    <h3>our order</h3>
                    <ul class="order-details p-0 mb-5">
                        @foreach ($cart_table as $item)
                        <input type="hidden" name="product_ids[]" value="{{$item->id}}">

                        <li class="d-flex justify-content-between">
                            <span class="text">{{$item->title}} x {{$item->quantity}}</span>
                            <span class="text-amount">${{$item->price * $item->quantity}}</span>
                        </li>
                        @endforeach
                        <li class="d-flex justify-content-between">
                            <span class="text">Shipping Charges</span>
                            <span class="text-amount">${{$shipping = $taxes->shipping_time ?? 00}}</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="text">GST</span>
                            <span class="text-amount">${{$gst = $taxes->gst ?? 00}}</span>
                        </li>
                        @if($discount != 0)
                        <li class="d-flex justify-content-between">
                            <span class="text">Discount</span>
                            <span class="text-amount text-danger">${{$discount}}</span>
                        </li>
                        @endif
                        <li class="d-flex justify-content-between">
                            <span class="text">Grand Total</span>
                            <span class="text-amount">${{$grand_total = $total + $shipping + $gst}}</span>
                        </li>
                    </ul>
                    <input type="hidden" name="shipping" value="{{$shipping}}">
                    <input type="hidden" name="gst" value="{{$gst}}">
                    <input type="hidden" name="discount" value="{{$discount}}">
                    <input type="hidden" name="coupon" value="{{$coupon_name}}">
                    <input type="hidden" name="grand_total" value="{{$grand_total}}">
                    <h3>Payment Method</h3>
                    <div class="accordion accordion-flush position-relative" id="accordionFlushExample">
                        <div class="accordion-item mb-3 border-0">
                            <h2 class="accordion-header border" id="flush-headingOne">
                                <button class="accordion-button  collapsed bg-white shadow-none py-2 pb-2 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                    Dimensions and weight
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body pt-0 opacity-50 pt-3"> Lorem Ipsum is simply in dummy text of
                                    the
                                    printing
                                    and type se
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border-0">
                            <h2 class="accordion-header border" id="flush-headingTwo">
                                <button class="accordion-button collapsed bg-white shadow-none ty-3 py-2 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                    direct bank transfer
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body pt-0 opacity-50 pt-3">Lorem Ipsum is simply in dummy text of
                                    the
                                    printing and
                                    type se
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border-0">
                            <h2 class="accordion-header border" id="flush-headingThree">
                                <button class="accordion-button collapsed bg-white shadow-none tex3 py-2 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                    direct bank transfer
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body pt-0 opacity-50 pt-3">Lorem Ipsum is simply in dummy text of
                                    the
                                    printing and
                                    type se
                                </div>
                            </div>
                            <div class="d-flex justify-content-end position-absolute circle-stone">
                                <img src="./assets/images/circle_stone.png" alt="not-found" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary rounded-0">Place Order</button>
                </form>
                </div>
            </div>
        </div>
    </section>
@include('customer.layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $('.tabber-list-container li').click(function() {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    })
</script>
