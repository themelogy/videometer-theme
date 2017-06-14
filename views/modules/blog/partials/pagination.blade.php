@if ($paginator->hasPages())
    <nav class="navigation">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <li class="disabled hide">&laquo;</li>
        @else
            <li><a class="pag-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-left"></i></a></li>
        @endif

    <!-- Pagination Elements -->
        @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <a class="disabled">{{ $element }}</a>
            @endif

        <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="page-numbers current bg-border-color"><a href="#">{{ $page }}</a></a>
                    @else
                        <a class="page-numbers bg-border-color" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <a class="pag-next" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-right"></i></a>
        @else
            <a class="disabled hide">&raquo;</a>
        @endif
    </nav>
@endif
