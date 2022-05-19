@if ($paginator->hasPages())
    <nav class="paginate">
        <ul class="pagination">
            @if (!$paginator->onFirstPage())
                <li class="page-item previous">
                    <a class="pages-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.28262 1.15124L8.84963 0.71811C8.69959 0.575728 8.52434 0.504517 8.3243 0.504517C8.12013 0.504517 7.94696 0.575728 7.80452 0.71811L4.99818 3.52453L2.19186 0.718191C2.04944 0.575809 1.87623 0.504598 1.67214 0.504598C1.472 0.504598 1.29679 0.575809 1.14673 0.718191L0.719418 1.15132C0.573112 1.29753 0.5 1.47273 0.5 1.67678C0.5 1.88463 0.573193 2.05786 0.719398 2.19642L4.47845 5.95548C4.61709 6.10171 4.79023 6.17488 4.99816 6.17488C5.20219 6.17488 5.37737 6.10173 5.52354 5.95548L9.2826 2.19642C9.42505 2.05395 9.49632 1.88075 9.49632 1.67678C9.49634 1.47654 9.42507 1.30143 9.28262 1.15124Z" fill="#252525"/>
                        </svg>
                    </a>
                </li>
            @endif
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled separator" aria-disabled="true"><span class="pages-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                              <span class="pages-link">
                                {{ $page }}
                                  <span class="sr-only">(current)</span>
                              </span>
                            </li>
                        @else
                            <li class="page-item"><a class="pages-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="page-item next">
                    <a class="pages-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.28262 1.15124L8.84963 0.71811C8.69959 0.575728 8.52434 0.504517 8.3243 0.504517C8.12013 0.504517 7.94696 0.575728 7.80452 0.71811L4.99818 3.52453L2.19186 0.718191C2.04944 0.575809 1.87623 0.504598 1.67214 0.504598C1.472 0.504598 1.29679 0.575809 1.14673 0.718191L0.719418 1.15132C0.573112 1.29753 0.5 1.47273 0.5 1.67678C0.5 1.88463 0.573193 2.05786 0.719398 2.19642L4.47845 5.95548C4.61709 6.10171 4.79023 6.17488 4.99816 6.17488C5.20219 6.17488 5.37737 6.10173 5.52354 5.95548L9.2826 2.19642C9.42505 2.05395 9.49632 1.88075 9.49632 1.67678C9.49634 1.47654 9.42507 1.30143 9.28262 1.15124Z" fill="#252525"/>
                        </svg>
                    </a>
                </li>
            @endif

        </ul>
    </nav>
@endif
