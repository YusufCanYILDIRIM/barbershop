<section class="services-section section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h2 class="mb-5">Services</h2>
            </div>
            @foreach($services as $service)
                <div class="col-lg-6 col-12 mb-4">
                    <div class="services-thumb">
                        <img src="{{ asset($service->image) }}" class="services-image img-fluid" alt="">
                        <div class="services-info d-flex align-items-end">
                            <h4 class="mb-0">{{ $service->name }}</h4>
                            @if($service->price)
                                <strong class="services-thumb-price">${{ $service->price }}</strong>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>