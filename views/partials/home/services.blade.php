@if($page = Page::findBySlug('hizmetler'))
<div class="container-fluid">
    <div class="row">
        <div class="background-mountains medium-padding120 scrollme">

            <div class="images">
                <img src="{{ Theme::url("img/mountain1.png") }}" alt="mountain">
                <img src="{{ Theme::url("img/mountain2.png") }}" alt="mountain">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="heading align-center">
                            <h4 class="h1 heading-title">{{ trans('themes::theme.titles.what we do') }}</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <p class="heading-text">
                                {{ $page->extension()->sub_title }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row align-center">
                    <div class="btn-block">
                        <a href="{{ $page->url }}" class="btn btn-medium btn--breez">
                            <span class="text">{{ trans('global.buttons.read more') }}</span>
                            <span class="semicircle"></span>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
@endif