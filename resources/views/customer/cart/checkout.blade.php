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
                    <h3>billing details</h3>
                    <input type="text" class="form-control rounded-0 px-3" placeholder="Your name is here...">
                    <input type="text" class="form-control rounded-0 px-3" placeholder="Your name is here...">
                    <input type="text" class="form-control rounded-0 px-3" placeholder="Your name is here...">
                    <input type="text" class="form-control rounded-0 px-3" placeholder="Your name is here...">
                    <select class="form-control rounded-0 px-3">
                        <option value="">Step 1</option>
                        <option value="">Step 2</option>
                        <option value="">Step 3</option>
                        <option value="">Step 4</option>
                    </select>
                    <select class="form-control rounded-0 px-3">
                        <option value="">Step 1</option>
                        <option value="">Step 2</option>
                        <option value="">Step 3</option>
                        <option value="">Step 4</option>
                    </select>
                    <select class="form-control rounded-0 px-3">
                        <option value="">Step 1</option>
                        <option value="">Step 2</option>
                        <option value="">Step 3</option>
                        <option value="">Step 4</option>
                    </select>
                    <textarea class="form-control rounded-0 mt-2" rows="5"
                        placeholder="Your address here..."></textarea>
                    <h3 class="mt-5 mb-2">SHIPPING ADDRESS</h3>
                    <label for=""> <input type="checkbox" class="me-2 d-inline-block">SHIP TO A DIFFERENT
                        ADDRESS?</label>
                    <label class="d-block mt-3">Order notes (optional)</label>
                    <textarea class="form-control rounded-0 mt-2" rows="5"
                        placeholder="Your address here..."></textarea>
                </div>
                <div class="col-md-6">
                    <h3>our order</h3>
                    <ul class="order-details p-0 mb-5">
                        <li class="d-flex justify-content-between">
                            <span class="text">Dummy Product Name x 2</span>
                            <span class="text-amount">$1855.00</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="text">Dummy Product Name x 2</span>
                            <span class="text-amount">$1855.00</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="text">Dummy Product Name x 2</span>
                            <span class="text-amount">$1855.00</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="text">Dummy Product Name x 2</span>
                            <span class="text-amount">$1855.00</span>
                        </li>
                        <li class="d-flex justify-content-between active">
                            <span class="text">Dummy Product Name x 2</span>
                            <span class="text-amount">$1855.00</span>
                        </li>
                    </ul>
                    <h3>payment method</h3>
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