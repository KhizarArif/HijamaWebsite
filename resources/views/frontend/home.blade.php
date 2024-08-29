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
    <iframe src="https://www.youtube.com/embed/dLsGnYjXLC0?si=mKKMRe26HRxOTzoc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>



<!-- What Client says -->

<!-- Customer Reviews Start-->

<div class="contianer my-4">
    <h2 class="review_title">What Our Clients Say</h2>
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
<section class="contact_container">
    <div class="row ">
        <div class="col-md-6">
            <form action="" class="contact_form" id="contact_form">
                <div class="form_group">
                    <label for="" class="form-label labels"> Your Name (required) </label>
                    <input type="text" name="name" id="name" class="form_control">
                </div>
                <div class="form_group">
                    <label for="" class="form-label labels"> Your Email (required) </label>
                    <input type="email" name="email" id="email" class="form_control">
                </div>
                <div class="form_group">
                    <label for="" class="form-label labels"> Subject </label>
                    <input type="text" name="subject" id="subject" class="form_control">
                </div>
                <div class="form_group">
                    <label for="" class="form-label labels"> Your Message </label>
                    <textarea type="text" cols="40" rows="10" name="message" id="message" class="form_control"> </textarea>
                </div>
                <button class="submit_contact_btn">SEND</button>
            </form>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-around">
            <div class="contact_info" >
                <h1> Working Hours </h1>
                <p>Working hours: 9am – 5pm on weekdays</p>
            </div>
            <div class="contact_info">
                <h1> Address </h1>
                <p>
                <a href="https://www.google.com/maps/place/Hijama+Faisalabad+Center(+Cupping+Clinic+)/@31.415272,73.0705506,17z/data=!3m1!4b1!4m6!3m5!1s0x392243be3daeda27:0x944226de516de190!8m2!3d31.415272!4d73.0731255!16s%2Fg%2F11pq2c8cq6?entry=ttu&g_ep=EgoyMDI0MDgyNi4wIKXMDSoASAFQAw%3D%3D" target="_blank"  >
                    Address Hijama Faisalabad Center( Cupping Clinic ), Corner St. No 4,
                     Main Imambargah Road, Outside, Jhang Bazar, Santpura, Faisalabad,
                     Pakistan
                </a>
                </p>
            </div>
            <div class="contact_info">
                <h1>Contact Us </h1>
                <p>
                (+92) 3336507744
                (+92) 3216507744
                </p>
            </div>
        </div>
    </div>
    <!-- <div class="contact_container">

    </div> -->
</section>

<!-- Contact Us End -->



@endsection


@section('customJs')
        <script>
            $("#contact_form").submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('front.contactUs') }}",
                    method: "post",
                    data: {
                        name: $("#name").val(),
                        email: $("#email").val(),
                        subject: $("#subject").val(),
                        message: $("#message").val(),
                    },
                    success: function(data) {
                        if (data.success == true) {
                            $("#contact_form")[0].reset();
                            alert(data.message);
                        } else {
                            alert(data.message);
                        }
                    }
                })
            })
        </script>
@endsection
