@extends('layouts.master')

@section('content')
    @component('partials.components.breadcrumbs', ['breadcrumbs'=>'contact'])
    {{ trans('themes::contact.title') }}
    @endcomponent

    <!-- End Overlay Search -->
    <div class="container">
        <div class="row pt120 pb80">
            <div class="col-lg-12">
                <div class="heading">
                    <h4 class="h1 heading-title">{!! trans('themes::contact.contact us') !!}</h4>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>
                    <p class="heading-text">{!! trans('themes::contact.contact desc') !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contacts -->

    <div class="container-fluid">
        <div class="row medium-padding80 bg-border-color contacts-shadow">
            <div class="container">
                <div class="row">
                    <div class="contacts">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="contacts-item">
                                <img src="{{ Theme::url('img/contact7.png') }}" alt="phone">
                                <div class="content">
                                    <p class="sub-title">{!! setting('theme::address') !!}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="contacts-item">
                                <img src="{{ Theme::url('img/contact8.png') }}" alt="phone">
                                <div class="content">
                                    <a href="mailto:{!! Html::email(setting('theme::email')) !!}" class="title">{!! Html::email(setting('theme::email')) !!}</a>
                                    <p class="sub-title">{!! trans("themes::theme.footer.titles.email") !!}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="contacts-item">
                                <img src="{{ Theme::url('img/contact9.png') }}" alt="phone">
                                <div class="content">
                                    <a href="#" class="title">{{ setting('theme::phone') }}</a>
                                    <p class="sub-title">{!! trans("themes::theme.footer.titles.phone") !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div style="height: 300px;">
            @gmap('300px', '16', 'img/marker.png')
        </div>
    </div>

    @include('contact::form')

@endsection