@extends('layouts.website.main')
@section('content')
    @include('home_components.hero')
    <main id="main">
        @include('home_components.about')
        @include('home_components.clients')
        @include('home_components.counter')
        @include('home_components.testimonial')
        @include('home_components.contact')
    </main>
@endsection
