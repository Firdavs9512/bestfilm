@if ($paginator->hasPages())

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            @else
            <a href="{{ $paginator->previousPageUrl() }}"><i class="ion-arrow-left-b"></i></a>

            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="active" >{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        <a class="active" >{{ $page }}</a>
                        @else
                        <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"><i class="ion-arrow-right-b"></i></a>
            @else
            @endif

@endif
