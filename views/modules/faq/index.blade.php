@extends('layouts.master')

@section('content')
    @component('partials.components.breadcrumbs', ['breadcrumbs'=>'faq.index'])
    {{ trans('themes::faq.title') }}
    @endcomponent

    <div class="container">
        <div class="row p-top-bot-30">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    @if(count($faqs)>0)
                        @foreach($faqs as $faq)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse{{ $loop->iteration }}" @if(!$loop->first)class="collapsed" @endif>
                                            {{ $faq->title }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{ $loop->iteration }}" class="panel-collapse collapse @if($loop->first)in @endif">
                                    <div class="panel-body">
                                        @if($faq->hasImage())
                                            <div class="thumbnail pull-right m-lft-20 m-bot-20">
                                                <img class="img-thumbnail" src="{{ $faq->present()->firstImage(250, 250, 'resize', 80) }}" alt="{{ $faq->title }}" />
                                            </div>
                                        @endif
                                        {!! $faq->content !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection