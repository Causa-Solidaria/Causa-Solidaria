@if ($paginator->hasPages())
    <div class="pagination-container">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="Previous">
                    <i class="material-icons">chevron_left</i>
                </li>
            @else
                <li class="waves-effect">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous">
                        <i class="material-icons">chevron_left</i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true">
                        <span>{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page">
                                <a>{{ $page }}</a>
                            </li>
                        @elseif (
                            $page == 1 || 
                            $page == $paginator->lastPage() || 
                            abs($page - $paginator->currentPage()) <= 2
                        )
                            <li class="waves-effect">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @elseif (
                            $page == $paginator->currentPage() - 3 || 
                            $page == $paginator->currentPage() + 3
                        )
                            <li class="disabled" aria-disabled="true">
                                <span>...</span>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="waves-effect">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next">
                        <i class="material-icons">chevron_right</i>
                    </a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="Next">
                    <i class="material-icons">chevron_right</i>
                </li>
            @endif
        </ul>
    </div>
@endif

