@stack('styles')
@stack('css_inline')

<!-- JS Script -->
{!! Theme::script("js/jquery-2.1.4.min.js") !!}
{!! Theme::script("js/crum-mega-menu.js") !!}
{!! Theme::script("js/swiper.jquery.min.js") !!}
{!! Theme::script("js/theme-plugins.js") !!}

@stack('scripts')

{!! Theme::script("js/main.js") !!}
{!! Theme::script("js/form-actions.js") !!}
{!! Theme::script("js/velocity.min.js") !!}
{!! Theme::script("js/ScrollMagic.min.js") !!}
{!! Theme::script("js/animation.velocity.min.js") !!}
<!-- ...end JS Script -->


@stack('js_inline')