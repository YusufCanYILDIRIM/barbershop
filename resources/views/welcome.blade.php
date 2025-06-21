@extends('layouts.app')

@section('title', "Gentlemen's Barber Shop - HTML CSS Template")

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('partials.sidebar')
            <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
                @include('partials.hero')
                @include('partials.about')
                @include('partials.featured')
                @include('partials.services')
                @include('partials.booking')
                @include('partials.price-list')
                @include('partials.contact')
                @include('partials.footer')
            </div>
        </div>
    </div>
@endsection