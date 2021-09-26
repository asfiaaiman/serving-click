@extends('layouts.website.main')

@section('stylesheets')
@endsection

@section('content')
    <section id="hero" >
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    @include('website.globals.form')
                </div>
            </div>
        </div>
    </section>

@endsection
