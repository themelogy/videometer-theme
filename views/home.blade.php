@extends('layouts.master')

@section('content')

    <div class="header-spacer"></div>

    @include('partials.sliders.revo')

    @include('partials.home.services')

    @if(isset($home_parts))
        @include('partials.home.info')

        @include('partials.home.seo-score')

        @include('partials.home.offers')

        @include('partials.home.video')

        //serices

        @include('partials.home.counters')

        @include('partials.home.recent-projects')

        @include('partials.home.testimonials')

        @include('partials.home.pricing')

        @include('partials.home.recent-blog')

        @include('partials.home.clients')

        @include('partials.home.newsletters')
    @endif
@endsection