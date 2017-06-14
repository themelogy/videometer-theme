<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head lang="{{ LaravelLocalization::getCurrentLocale() }}">
@include('partials.metadata')
</head>
<body>

@include('partials.header')

<div class="content-wrapper">
    @yield('content')
</div>

@include('partials.footer')

@include('partials.scripts')

</body>
</html>

<!-- Localized -->