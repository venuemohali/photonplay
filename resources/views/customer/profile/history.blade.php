@include('customer.layouts.header')
<section class="overview">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                <x-customer.profile-sidebar />
                    
                    <div class="col-lg-8  col-md-6 col-12">
                        <div class="overview-wrapper">
                            <h5 class="btn-light fs-5 py-3 ">HISTORY</h5>
                            <div class="card-box border p-3">
                                <div class="delivers d-flex align-items-center">
                                    <img src="./assets/images/delivery.png" alt="Not Found" class="me-2">
                                    <div>
                                        <p class="text-grey mb-0">Delivered</p>
                                        <span class="text-grey">On Tue, 4 March 2023</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center p-2 my-4 border">
                                    <div class="inner-card-wrapper me-3">
                                    </div>
                                    <div>
                                        <p class="text-uppercase mb-1">dummy product name</p>
                                        <span class="d-block text-capitalize">Brand</span>
                                        <span class="d-block text-capitalize">Model</span>
                                        <span class="d-block text-capitalize">Color</span>
                                    </div>
                                </div>
                                <div class="rate product">
                                    <span class="me-2">Rate Product</span>
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                </div>
                            </div>
                            <div class="card-box border p-3 my-3">
                                <div class="delivers d-flex align-items-center">
                                    <img src="./assets/images/delivery.png" alt="Not Found" class="me-2">
                                    <div>
                                        <p class="text-grey mb-0">Delivered</p>
                                        <span class="text-grey">On Tue, 4 March 2023</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center p-2 my-4 border">
                                    <div class="inner-card-wrapper me-3">
                                    </div>
                                    <div>
                                        <p class="text-uppercase mb-1">dummy product name</p>
                                        <span class="d-block text-capitalize">Brand</span>
                                        <span class="d-block text-capitalize">Model</span>
                                        <span class="d-block text-capitalize">Color</span>
                                    </div>
                                </div>
                                <div class="rate product">
                                    <span class="me-2">Rate Product</span>
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                </div>
                            </div>
                            <div class="card-box border p-3">
                                <div class="delivers d-flex align-items-center">
                                    <img src="./assets/images/delivery.png" alt="Not Found" class="me-2">
                                    <div>
                                        <p class="text-grey mb-0">Delivered</p>
                                        <span class="text-grey">On Tue, 4 March 2023</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center p-2 my-4 border">
                                    <div class="inner-card-wrapper me-3">
                                    </div>
                                    <div>
                                        <p class="text-uppercase mb-1">dummy product name</p>
                                        <span class="d-block text-capitalize">Brand</span>
                                        <span class="d-block text-capitalize">Model</span>
                                        <span class="d-block text-capitalize">Color</span>
                                    </div>
                                </div>
                                <div class="rate product">
                                    <span class="me-2">Rate Product</span>
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                    <img src="./assets/images/start-adress.png" alt="Not Found">
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link bg-transparent border-0">Showing </a>
                                    </li>
                                    <li class="page-item"><a class="page-link bg-transparent border-0 text-dark" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link bg-transparent border-0 text-dark" href="#">-3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link bg-transparent border-0 text-dark" href="#"> of 12</a></li>
                                    <li class="page-item">
                                        <a class="page-link bg-transparent border-0" href="#"> <span class="text-grey"> Next </span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@include('customer.layouts.footer')