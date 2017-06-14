@extends('layouts.master')

@section('content')

    @component('partials.components.breadcrumbs', ['breadcrumbs'=>'blog.author'])
    {{ trans('themes::blog.author posts', ['author' => $author->fullname]) }}
    @endcomponent

    <div class="container">
        <div class="row medium-padding120">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <main class="main">
                    @foreach($posts as $post)
                        @include('blog::partials.article')
                    @endforeach
                </main>

                <div class="row">
                    <div class="col-lg-12">
                        {!! $posts->render('blog::partials.pagination') !!}
                    </div>
                </div>
            </div>
            @include('blog::partials.sidebar')
        </div>
    </div>
@endsection