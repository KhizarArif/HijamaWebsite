@extends('frontend.layouts.app')

@section('content')
<div class="container-full">
    <div class="hero_container">
        <div class="hero_image_container">
            <img src="{{asset('front_assets/image/intro_background.png')}}" alt="" class="hero_image">
        </div>
        <div class="hero_content">
            <h1> One Of the Most Credible Hijama Center in Faisalabad </h1>
            <P>with 25 years of Experience in Hijama and Alternative medicine,
                we are one of the most credible hijama center in Lahore</P>
        </div>
    </div>

</div>


<!-- Cards Start -->
<div class="container-full card_container">
    <p class="location_heading"> Hijama Center in Faisalabad </p>
    <h1 class="card_intro">Mind, Body, And Soul </h1>

    <div class="card_listing">
        <div class="cards mb-3" style="max-width: 22rem; ">
            <div class=""><i class="fa-regular fa-heart fa-3x card_icons"></i></div>
            <div class="card-body text-dark">
                <h1 class="card-title">Immunity Booster</h1>
                <p class="card-text">Hijama Cupping Therapy helps you boost your immunity without taking any artifical medicine. It help rejuvinate your body.</p>
            </div>
        </div>

        <div class="cards mb-3" style="max-width: 22rem; ">
            <div class=""><i class="fa-regular fa-heart fa-3x card_icons"></i></div>
            <div class="card-body text-dark">
                <h5 class="card-title">Immunity Booster</h5>
                <p class="card-text">Hijama Cupping Therapy helps you boost your immunity without taking any artifical medicine. It help rejuvinate your body.</p>
            </div>
        </div>

        <div class="cards mb-3" style="max-width: 22rem; ">
            <div class=""><i class="fa-regular fa-heart fa-3x card_icons"></i></div>
            <div class="card-body text-dark">
                <h5 class="card-title">No Side Effects</h5>
                <p class="card-text">Hijama does not involve any harmful medication. so it bears no side effects. Hijama Cupping therapy is clean from Any Side effects</p>
            </div>
        </div>


    </div>

</div>

<!-- Cards End -->

<!-- What is hijama -->
<div class="hijama-section">
    <h2>But What Is Hijama?</h2>
    <p class="subtitle">Know The Process!</p>

    <div class="hijama-content">
        <div class="hijama-image">
            <img src="{{ asset('front_assets/image/what-is-hijama-new-image.png') }}" alt="Hijama Cupping Therapy">
        </div>

        <div class="hijama-info">
            <p>Hijama cupping therapy includes the elimination of toxic substances from the blood. Hijama cupping therapy has a wide range of benefits all the way from head to toe.</p>

            <div class="benefits">
                <div class="benefit-item">
                    <i aria-hidden="true" class="fas fa-walking fa-3x"></i>
                    <p>Joint Pains</p>
                </div>
                <div class="benefit-item">
                    <i aria-hidden="true" class="fas fa-baby fa-3x"></i>
                    <p>Fertility Issues</p>
                </div>
                <div class="benefit-item">
                    <i aria-hidden="true" class="fas fa-soap fa-3x"></i>
                    <p>Skin Issues</p>
                </div>
                <div class="benefit-item">
                    <i aria-hidden="true" class="fas fa-plus-circle fa-3x"></i>
                    <p>and Much More!</p>
                </div>
            </div>

            <button class="consultation-btn">Call For Free Consultation</button>
        </div>
    </div>
</div>

<div class="container video_container  ">
    <h1 class="benefit_of_hijama"> Benefits Of Hijama Cupping Therapy </h1>
    <iframe  src="https://www.youtube.com/embed/dLsGnYjXLC0?si=mKKMRe26HRxOTzoc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>



<!-- What Client says -->

<!-- Customer Reviews Start-->

    <div class="contianer my-4">
        <h2 class="review_title" >What Our Clients Say</h2>
        <p class="review_subtitle">Our Patients are our Spokesperson!</p>
        <div class="wrapper">
            <i id="left" class="fa-solid  fas fa-angle-left"></i>
            <ul class="carousel">
                @if ($reviews != null)
                @foreach ($reviews as $review)
                <li class="card">
                    <div class="row review_header">
                        <div class="col-sm-4 col-md-6 card_image_div ">
                            <img src="{{ asset('front_assets/image/reviews/'.$review->image)}}"
                                class="card_image" alt="" draggable="false">
                        </div>
                        <h6 class="col-sm-8 col-md-6 card_image_name">
                            {{ $review->name}}
                        </h6>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <p class="w-100 p-4">{{ $review->review }}</p>
                        </div>
                    </div>

                </li>
                @endforeach
                @endif

            </ul>
            <i id="right" class="fa-solid fas fa-angle-right"></i>
        </div>

    </div>

<!-- Customer Reviews End-->


<!-- Contact Us Start -->
<section class="contianer  my-4">
    <div class="contact-container">
        <div class="contact-info">
            <h2>Contact Us</h2>
            <p>Get in Touch</p>
            <ul>
                <li>
                    <i class="fa fa-whatsapp"></i>
                    <span>Whatsapp</span>
                    <p>+923334624627</p>
                </li>
                <li>
                    <i class="fa fa-envelope"></i>
                    <span>Email</span>
                    <p>info@hijamacuppinginlahore.com</p>
                </li>
                <li>
                    <i class="fa fa-map-marker"></i>
                    <span>Locations</span>
                    <p>Mozang, Lahore</p>
                    <p>Canal, Lahore</p>
                </li>
            </ul>
        </div>
        <div class="container contact-form">
            <form>
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="phone" placeholder="Phone">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</section>

<!-- Contact Us End -->



@endsection
