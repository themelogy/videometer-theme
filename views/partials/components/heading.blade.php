<div class="col-lg-12">
    <div class="heading mb30">
        <h4 class="h1 heading-title">{{ $slot }}</h4>
        <div class="heading-line">
            <span class="short-line"></span>
            <span class="long-line"></span>
        </div>
        @if(isset($sub_title))
        <h5 class="heading-subtitle">
            {{ $sub_title }}
        </h5>
        @endif
    </div>
</div>