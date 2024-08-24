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

<div class="container-full card_container">
    <p class="location_heading"> Hijama Center in Faisalabad </p>
    <h1 class="card_intro">Mind, Body, And Soul </h1>

    <div class="card_listing">
        <div class="cards mb-3" style="max-width: 20rem;">
            <div class=""><i class="fa-regular fa-heart fa-3x card_icons"></i></div>
            <div class="card-body text-dark">
                <h1 class="card-title">Dark card title</h1>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="cards mb-3" style="max-width: 20rem;">
            <div class=""><i class="fa-regular fa-heart fa-3x card_icons"></i></div>
            <div class="card-body text-dark">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="cards mb-3" style="max-width: 20rem;">
            <div class=""><i class="fa-regular fa-heart fa-3x card_icons"></i></div>
            <div class="card-body text-dark">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>


    </div>

</div>

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

<div class="container p-6">
    <h1 class="benefit_of_hijama"> Benefits Of Hijama Cupping Therapy </h1>
    <!-- <video width="320" height="240" autoplay muted>
        <source src="https://youtu.be/QCi8l8Cq1kQ?si=Iw7V5QfdPPNyo7-K" type="video/mp4">
        Your browser does not support the video tag.
    </video> -->
    <video width="400" controls>
  <source src="https://youtu.be/QCi8l8Cq1kQ?si=Iw7V5QfdPPNyo7-K" type="video/mp4">
  Your browser does not support HTML video.
</video>

    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/QCi8l8Cq1kQ?si=SzGPS-YQDTiH01L_&amp;start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
</div>



<!-- What Client says -->
<div class="testimonial-section">
    <h2>What Our Clients Say</h2>
    <p class="subtitle">Our Patients are our Spokesperson!</p>

    <div class="testimonial-container">
        <div class="testimonial-card">
            <p>Highly recommended treatment! I have been taking Hijama treatment since the last five years. With countless and amazing benefits on health, I would highly recommend it to females who will be or are facing menopause.</p>
            <div class="testimonial-author">
                <img src="furwah.jpg" alt="Furwah Mutahir">
                <div>
                    <h3>Furwah Mutahir</h3>
                    <div class="stars">
                        &#9733;&#9733;&#9733;&#9733;&#9733;
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial-card">
            <p>My experience with Dr Zameer Hussain has been fantastic. I wish I knew Dr Zameer earlier; he is a great man with lots of knowledge in hijama cupping and acupuncture. I would recommend this great man for anyone who has any health issues.</p>
            <div class="testimonial-author">
                <img src="john.jpg" alt="John Mehdi">
                <div>
                    <h3>John Mehdi</h3>
                    <div class="stars">
                        &#9733;&#9733;&#9733;&#9733;&#9733;
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial-card">
            <p>Dr Zameer Jafri is very cooperative, very humble doctor, and the best Hijama Cupping therapist in Lahore. He diagnoses very well. I feel relaxed and comfortable after every session of Hijama Cupping.</p>
            <div class="testimonial-author">
                <img src="fizza.jpg" alt="Fizza Ali">
                <div>
                    <h3>Fizza Ali</h3>
                    <div class="stars">
                        &#9733;&#9733;&#9733;&#9733;&#9733;
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
