@php
use App\Models\Client;
$clients = Client::get();
@endphp
<section class="our-clints-last">
        <div class="mb-lg-5 text-center">
            <h2 class="fs-md-2 mt-3">Our Clients</h2>
        </div>
        <div class="container">
            <div class="px-4">
                <div class="clints-content mb-0 d-flex align-items-center">
                    @forelse ($clients as $client)
                    <div>
                        <div class="px-2 branding-diss">
                            <img src="{{asset('storage/'.$client->image)}}" class="d-block mx-auto" />
                        </div>
                    </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </section>
