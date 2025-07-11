<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h1 class="text-white mb-lg-3 mb-4">
                    <strong>{{ $content->title ?? 'Barber' }}</strong>
                </h1>
                <p class="text-black">{{ $content->description ?? 'Get the most professional haircut for you' }}</p>
                <br>
                <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2" href="#section_2">
                    About Us
                </a>
                <a class="btn custom-btn smoothscroll mb-2" href="#section_3">
                    What we do
                </a>
            </div>
        </div>
    </div>
    <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">
        <h4><strong class="text-white">{{ $content->callout_title ?? 'Hurry Up! Get good haircut.' }}</strong></h4>
        <a href="#booking-section" class="smoothscroll btn custom-btn custom-btn-italic mt-3">
            Book a seat
        </a>
    </div>
</section>