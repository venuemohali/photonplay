@php
use App\Models\Client;
$clients = Client::get();
@endphp

<section class="{{Request::is('/') ||  Route::currentRouteName() === 'customer.about.us'? 'our-clints-last':''}} ">
        <div class="mb-lg-5 text-center">
            <h2 class="fs-md-2 mt-3">Our Clients</h2>
        </div>
        <div class="container">
            <div class="px-4">
                <div class="clints-content-branding mb-0 d-flex align-items-center justify-content-center gap-1">
                   @for($i=0;$i<2;$i++)
                    @forelse ($clients as $client)
                    <div class="bg--behance" style="max-height: 150px;">
                        <div class="px-2 branding-diss" id="{{$client->index}}">
                            <img src="{{asset('storage/'.$client->image)}}" class="d-block mx-auto" />
                        </div>
                    </div>
                    @empty
                    @endforelse
                    @endfor
                </div>
            </div>
        </div>
    </section>
