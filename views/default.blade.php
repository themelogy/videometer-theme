@extends('layouts.master')


@section('content')

    @component('partials.components.breadcrumbs', ['breadcrumbs'=>'page'])
        {{ $page->title }}
    @endcomponent

    <div class="container">
        <div class="row p-top-bot-30">

            @if(isset($page->extension()->sub_title))
                @component('partials.components.heading')
                {{ $page->title }}
                @slot('sub_title')
                {{ $page->extension()->sub_title }}
                @endslot

                @endcomponent
            @endif

            <div class="col-lg-12">
                {!! $page->body !!}
            </div>
        </div>
    </div>

    @if($page->id == 2)
        @include('partials.parts.our-team')
    @endif

@stop
