@extends('layouts.master')

@section('content')

    @component('partials.components.breadcrumbs', ['breadcrumbs'=>'blog'])
    {{ $post->title }}
    @endcomponent

    <div class="container">
        <div class="row medium-padding120">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <main class="main">
                    <article class="hentry post post-standard has-post-thumbnail">
                        <div class="post-thumb">
                            <img src="{{ $post->present()->firstImage(690,418,'fit',80) }}" alt="{{ $post->title }}">
                            <div class="overlay"></div>
                            <a href="{{ $post->present()->firstImage(690,null,'fit',80) }}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>
                        <div class="post__content">
                            <div class="post__author author vcard">
                                <img src="{{ Theme::url('img/avatar6.png') }}" alt="author">
                                <div class="post__author-name fn">
                                    <a href="{{ route('blog.author', [$post->author->slug]) }}" class="post__author-link">{{ $post->author->fullname }}</a>
                                </div>
                            </div>
                            <div class="post__content-info">
                                <h2 class="post__title entry-title ">
                                    <a href="{{ $post->url }}">{{ $post->title }}</a>
                                </h2>
                                <div class="post-additional-info">
                <span class="post__date">
                    <i class="seoicon-clock"></i>
                    <time class="published" datetime="{{ $post->created_at }}">
                        {{ $post->created_at->formatLocalized('%d %B %Y') }}
                    </time>
                </span>
                                    <span class="category">
                    <i class="seoicon-tags"></i>
                    <a href="{{ $post->category->url }}">{{ $post->category->name }}</a>
                </span>
                                </div>
                                <p class="post__text">
                                    {!! $post->content !!}
                                </p>
                            </div>
                        </div>

                    </article>
                </main>
            </div>

            @include('blog::partials.sidebar')

        </div>
    </div>
@endsection