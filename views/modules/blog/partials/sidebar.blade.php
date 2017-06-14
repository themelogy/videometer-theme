<!-- Sidebar-->
<div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-12 col-xs-12">
    <aside aria-label="sidebar" class="sidebar sidebar-right">
        <div class="widget w-post-category">
            <div class="heading">
                <h4 class="heading-title">{!! trans("themes::blog.category") !!}</h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
            </div>
            <div class="post-category-wrap">
                @foreach(BlogCategory::all() as $category)
                    <div class="category-post-item">
                        <span class="post-count">{{ $category->posts()->count() }}</span>
                        <a href="{{ $category->url }}" class="category-title">{{ $category->name }}
                            <i class="seoicon-right-arrow"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="widget w-request bg-boxed-red">
            <div class="w-request-content">
                <img src="{{ Theme::url('img/request.png') }}" alt="{{ trans('themes::contact.free request') }}">
                <h4 class="w-request-content-title">{{ trans('themes::contact.free request') }}</h4>
                <p class="w-request-content-text">{{ trans('themes::contact.contact desc') }}</p>
                <a href="{{ route('contact') }}" class="btn btn-small btn--dark btn-hover-shadow">
                    <span class="text">{{ trans('themes::contact.contact us') }}</span>
                </a>
            </div>
        </div>

        <div class="widget w-latest-news">
            <div class="heading">
                <h4 class="heading-title">{!! trans("themes::blog.recent posts") !!}</h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
            </div>

            <div class="latest-news-wrap">
                @foreach(Blog::latest(3) as $recent)
                    <div class="latest-news-item">
                        <div class="post-additional-info">
                            <span class="post__date">
                                <i class="seoicon-clock"></i>
                                <time class="published" datetime="{{ $recent->created_at }}">
                                    {{ $recent->created_at->formatLocalized('d F Y') }}
                                </time>
                            </span>
                        </div>
                        <h5 class="post__title entry-title ">
                            <a href="{{ $recent->url }}">
                                {{ $recent->title }}
                            </a>
                        </h5>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="widget w-follow">
            <div class="heading">
                <h4 class="heading-title">{!! trans('themes::theme.titles.follow us') !!}</h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
            </div>

            <div class="w-follow-wrap">
                @php $socials = ['twitter', 'facebook', 'google', 'linkedin', 'pinterest']; @endphp
                @foreach($socials as $social)
                    @if($link = setting('theme::'.$social))
                        <div class="w-follow-item {{ $social }}-bg-color">
                            <a href="{{ $link }}" class="w-follow-social__item table-cell" target="_blank" rel="nofollow">
                                <i class="fa fa-{{ $social }}"></i>
                            </a>
                            <a href="{{ $link }}" class="w-follow-title table-cell">{{ ucfirst($social) }}
                                <span class="w-follow-add">
                                    <i class="seoicon-cross plus"></i>
                                    <i class="seoicon-check-bold check"></i>
                                </span>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>

        <div class="widget w-tags">
            <div class="heading">
                <h4 class="heading-title">{{ trans('tag::tags.tags') }}</h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
            </div>

            <div class="tags-wrap">
                @if(Request::route()->getName() == 'blog.index')
                    @foreach(Blog::latest(10) as $recent)
                        <?php $tag = $recent->tags()->first(); ?>
                        @if($tag)
                            <a href="{{ route('blog.tag', [$tag->slug]) }}" class="w-tags-item">{{ $tag->name }}</a>
                        @endif
                    @endforeach
                @else
                    @if(isset($post))
                        @foreach($post->tags as $tag)
                            <a href="{{ route('blog.tag', [$tag->slug]) }}" class="w-tags-item">{{ $tag->name }}</a>
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </aside>
</div>
<!-- End Sidebar-->