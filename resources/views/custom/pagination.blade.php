@if ($paginator->hasPages())
    <div class="pagination-container">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled"><span>&laquo;</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
            @else
                <li class="disabled"><span>&raquo;</span></li>
            @endif
        </ul>
    </div>
@endif

<style>
.pagination-container {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: #f8f9fa;
    padding: 10px 0;
    text-align: center;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
}

.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 0;
    border-radius: 4px;
}

.pagination li {
    display: inline;
}

.pagination li a, .pagination li span {
    color: #007bff;
    padding: 6px 12px;
    text-decoration: none;
    border: 1px solid #dee2e6;
    margin-left: -1px;
}

.pagination li a:hover {
    background-color: #e9ecef;
}

.pagination li.active span {
    background-color: #007bff;
    color: white;
    border-color: #007bff;
}

.pagination li.disabled span {
    color: #6c757d;
    pointer-events: none;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #dee2e6;
}
</style>