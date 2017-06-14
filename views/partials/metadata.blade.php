<meta charset="UTF-8">
{!! seo_helper()->render() !!}
<meta id="token" name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ Theme::url('img/favicon.ico') }}">


{!! Theme::style("css/theme.css") !!}

<!--Plugins styles-->
{!! Theme::style("css/jquery.mCustomScrollbar.min.css") !!}
{!! Theme::style("css/swiper.min.css") !!}
{!! Theme::style("css/magnific-popup.css") !!}

<!--Styles for RTL-->
<!--{!! Theme::style("css/rtl.css") !!}-->

<!--External fonts-->
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>