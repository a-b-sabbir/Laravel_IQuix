@extends('layouts.app')

@section('title', 'IQuix')

@section('content')

<section id="home">
    <div class="home-headlines">
        <h6 class="home-small">SOFTWARE SOLUTION</h6>
        <h1>EMPOWERING YOUR BUSINESS THROUGH TECHNOLOGY</h1>

        <div class="button-group">
            <a href="" class="btn btn-primary">Get Started</a>
            <a href="#contact" class="btn btn-outline">Contact Us</a>
        </div>
    </div>

    <div class="card-container">
        <div class="card">
            <h2>Card 1</h2>
            <p>This is the first card with some content.</p>
        </div>
        <div class="card">
            <h2>Card 2</h2>
            <p>This is the second card with different content.</p>
        </div>
    </div>

</section>

@include('partials.about')
@include('partials.our_services')
@include('partials.achievements')
@include('partials.transform_section')
@include('partials.contact')
@include('partials.our_team')
@include('partials.testimonials')
@include('partials.support_section')


@endsection