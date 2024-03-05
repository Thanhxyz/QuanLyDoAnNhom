@if ($paginator->hasPages())
    <div class="pagination" style="text-align: center;">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="page-link" style="display: inline-block;">« Trước</span>
        @else
            <a class="page-link" style="display: inline-block;" href="{{ $paginator->previousPageUrl() }}" rel="prev">« Trước</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="page-link" style="display: inline-block;" href="{{ $paginator->nextPageUrl() }}" rel="next">Sau »</a>
        @else
            <span class="page-link" style="display: inline-block;">Sau »</span>
        @endif
    </div>
@endif
