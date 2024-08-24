@extends('frontend.layouts.app')

@section('content')
<div class="container-full">
    <div class="hero_container">
        <div class="hero_image_container">
            <img src="{{asset('front_assets/image/intro_background.png')}}" alt="" class="hero_image" >
        </div>
        <div class="hero_content">
            <h1> One Of the Most Credible Hijama Center in Faisalabad </h1>
            <P>with 25 years of Experience in Hijama and Alternative medicine,
                we are one of the most credible hijama center in Lahore</P>
        </div>
    </div>

</div>

<div class="container-full card_container">
    <h1 class="location_heading"> Hijama Center in Faisalabad </h1>
    <h2>Mind, Body, And Soul </h2>

    <div class="card_listing">
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

        <div class="cards mb-3" style="max-width: 20rem;">
            <div class=""><i class="fa-regular fa-heart fa-3x card_icons"></i></div>
            <div class="card-body text-dark">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>


    </div>

</div>
@endsection
