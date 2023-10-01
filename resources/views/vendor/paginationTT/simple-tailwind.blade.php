@if ($paginator->hasPages())
<div
        class="a8 a1K ab[-16px] wow fadeInUp"
        data-wow-delay=".15s"
      >
        <div class="a7 ae">
            {{-- {{ $posts->links() }} --}}
            {{-- {{$posts->links}} --}}
          <ul class="a8 a9 a3d a1x">

            @if ($paginator->onFirstPage())
                <li class="a3e">
                    <a
                    href="javascript:void(0)"
                    class="
                        a8
                        a9
                        a1x
                        a13
                        a3f
                        a3g[15%]
                        hover:a1k hover:a31
                        a1p
                        hover:aI
                        a1S ae a1b a3h[36px] a1t
                    "
                    >
                    Prev
                    </a>
                </li>
            @else
                {{-- <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    {!! __('pagination.previous') !!}
                </a> --}}
                <li class="a3e">
                    <a
                      href="{{ $paginator->previousPageUrl() }}"
                      class="
                        a8
                        a9
                        a1x
                        a13
                        a3f
                        a3g[15%]
                        hover:a1k hover:a31
                        a1p
                        hover:aI
                        a1S ae a1b a3h[36px] a1t
                      "
                    >
                      Prev
                    </a>
                  </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                {{-- <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    {!! __('pagination.next') !!}
                </a> --}}
                <li class="a3e">
                    <a
                      href="{{ $paginator->nextPageUrl() }}"
                      class="
                        a8
                        a9
                        a1x
                        a13
                        a3f
                        a3g[15%]
                        hover:a1k hover:a31
                        a1p
                        hover:aI
                        a1S ae a1b a3h[36px] a1t
                      "
                    >
                      Next
                    </a>
                  </li>
            @else
            <li class="a3e">
                <a
                  href="javascript:void(0)"
                  class="
                    a8
                    a9
                    a1x
                    a13
                    a3f
                    a3g[15%]
                    hover:a1k hover:a31
                    a1p
                    hover:aI
                    a1S ae a1b a3h[36px] a1t
                  "
                >
                  Next
                </a>
              </li>
            @endif

          </ul>
        </div>
        {{-- {{ dd($posts->links()) }} --}}

      </div>
      
@endif
