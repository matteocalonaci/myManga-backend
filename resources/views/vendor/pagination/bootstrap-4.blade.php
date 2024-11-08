@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
        </li>

        {{-- Pagination Elements --}}
        @for ($i = max(1, $paginator->currentPage() - 3); $i <= min($paginator->lastPage(), $paginator->currentPage() + 2); $i++)
            <li class="page-item {{ $i == $paginator->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        {{-- Dots Separator --}}
        @if ($paginator->lastPage() > 6)
            @if ($paginator->currentPage() < $paginator->lastPage() - 2)
                <li class="disabled"><span>...</span></li>
            @endif
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        </li>
    </ul>
@endif
