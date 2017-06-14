<div class="stunning-header stunning-header-bg-breez">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{ $slot }}</h1>
        @if(isset($breadcrumbs))
            {!! Breadcrumbs::renderIfExists($breadcrumbs) !!}
        @endif
    </div>
</div>