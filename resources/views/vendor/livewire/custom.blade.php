@if ($paginator->hasPages())
    <nav class="pager">

        @if ($paginator->onFirstPage())
            <li>
                <span class="btn btn-danger">
                    {!! __('pagination.previous') !!}
                </span> 
            </li>
        @else
            <li>
                <a class="btn btn-success" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    ← Previous
                </a>  
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li>
                <a class="btn btn-success" href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a>
            </li>
        @else
            <li>
                <span class="btn btn-danger">
                    {!! __('pagination.next') !!}
                </span>
            </li>
        @endif
    </nav>
@endif
