@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <li class="paginate_button page-item previous
            disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0"
                data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
            @else
            <li class="paginate_button page-item previous" id="DataTables_Table_0_previous"><a href="{{ $paginator->previousPageUrl() }}" aria-controls="DataTables_Table_0"
                data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>


            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="paginate_button page-item disabled"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4"
                        tabindex="0" class="page-link">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0"
                            data-dt-idx="1" tabindex="0" class="page-link">{{ $page }}</a></li>
                        @else
                        <li class="paginate_button page-item "><a href="{{ $url }}" aria-controls="DataTables_Table_0" data-dt-idx="4"
                            tabindex="0" class="page-link">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="{{ $paginator->nextPageUrl() }}"
                aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">Next</a></li>

            @else
                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#"
                    aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">Next</a></li>
            @endif
        </ul>
    </nav>
@endif
