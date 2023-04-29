@php
use App\Models\Setting;
$setting = Setting::first();
@endphp
<section class="contact-form bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-sec-info">
                    <div class="text-start pb-2">
                        <h2 class="fs-md-2 mt-3">Request a Demo</h2>
                        <p class="opacity-50">We're dedicated to creating meaningful connections
                            that propel your success forward.</p>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <a href="tel:{{$setting->sales_phone}}"><img src="{{asset('assets\customer\images\phone.svg')}}" /> {{$setting->sales_phone}}</a>
                            @if ($setting->support_phone !=null)
                            <a href="tel:{{$setting->support_phone}}"><img src="{{asset('assets\customer\images\phone.svg')}}" /> {{$setting->support_phone}}</a>
                            @endif
                            <a href="mailto:{{$setting->sales_email}}"><img src="{{asset('assets\customer\images\message.png')}}" /> {{$setting->sales_email}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-start pb-2">
                    <h2 class="fs-md-2 mt-3">GET IN TOUCH</h2>
                    <p class="opacity-50">Empowering connections that drive your success.</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="Company Name / Organization*" class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="Country*" class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="First Name*" class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="Last Name*" class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="Email Address*" class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="Phone Number*" class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control rounded-0 mb-4" rows="4" placeholder="Message" aria-describedby="passwordHelpBlock"></textarea>
                    </div>
                </div>
                <div class="text-start">
                    <button class="btn btn-primary px-5 rounded-0">Send Now</button>
                </div>
            </div>
        </div>
    </div>
</section>