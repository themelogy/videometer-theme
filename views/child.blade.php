@extends('layouts.master')

@section('content')
    @component('partials.components.breadcrumbs', ['breadcrumbs'=>'page'])
    {{ $page->title }}
    @endcomponent

    <div class="container">
        <div class="row p-top-bot-30">
            @foreach($page->children()->take(4)->get() as $service)
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box--standard-centered">
                        <div class="info-box-image">
                            <img src="{{ $service->present()->firstImage(170,170,'fit',80) }}" alt="{{ $service->title }}">
                        </div>
                        <div class="info-box-content">
                            <h4 class="info-box-title">{{ $service->title }}</h4>
                            <p class="text">
                                {!! strip_tags(str_sentence($service->body, 1)) !!}
                            </p>
                            <a href="{{ $service->url }}">
                                <span class="text">{{ trans('global.buttons.read more') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection