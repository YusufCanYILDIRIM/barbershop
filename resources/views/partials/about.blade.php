<section class="about-section section-padding" id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 mx-auto">
                <h2 class="mb-4">Best hairdressers</h2>
                <div class="border-bottom pb-3 mb-5">
                    <p>Gentlemen's Barber Shop is new Bootstrap v5 HTML CSS template by <a href="https://templatemo.com/page/1" target="_blank">TemplateMo</a> for everyone. There is a sidebar menu to navigate the one-page layout. You can feel free to adapt this template for your business.</p>
                </div>
            </div>
            <h6 class="mb-5">Meet Barbers</h6>
            @foreach($stories as $story)
                <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap me-lg-5 mb-5 mb-lg-0">
                    <img src="{{ asset($story->image) }}" class="custom-block-bg-overlay-image img-fluid" alt="">
                    <div class="team-info d-flex align-items-center flex-wrap">
                        <p class="mb-0">{{ $story->name }}</p>
                        <ul class="social-icon ms-auto">
                            @if($story->facebook)
                                <li class="social-icon-item"><a href="{{ $story->facebook }}" class="social-icon-link bi-facebook"></a></li>
                            @endif
                            @if($story->instagram)
                                <li class="social-icon-item"><a href="{{ $story->instagram }}" class="social-icon-link bi-instagram"></a></li>
                            @endif
                            @if($story->whatsapp)
                                <li class="social-icon-item"><a href="{{ $story->whatsapp }}" class="social-icon-link bi-whatsapp"></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>