@if ($breadcrumbs)
    <ul class="breadcrumbs">
        <li class="breadcrumbs-item"><a href="{{ route('homepage') }}"><i class="fa fa-home"></i></a>
        </li>
        @foreach ($breadcrumbs as $crumb)
            <?php
            $icon = isset($crumb->icon) ? '<i class="' . $crumb->icon . '"></i> ' : '';
            ?>

            @if ($crumb->url && ! $crumb->last)
                <li class="breadcrumbs-item">
                    <a href="{{ $crumb->url }}">{!! $icon !!}{!! $crumb->title !!}</a>
                </li>
            @else
                <li class="breadcrumbs-item active">{!! $icon !!}<span>{!! $crumb->title !!}</span></li>
            @endif
        @endforeach
    </ul>
@endif
