<ul class="pagination">
    {{-- Previous Page Link --}}
    @if ($posts->onFirstPage())
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    @else
    <li class="waves-effect"><a href="{{ $posts->previousPageUrl() }}"><i class="material-icons">chevron_left</i></a></li>
    @endif

    {{-- Page Number Links --}}
    @for($i=1; $i<=$posts->lastItem(); $i++)
        @if($i==$posts->currentPage())
            <li class="active"><a href="?page={{$i}}">{{$i}}</a></li>
        @else
            <li class="waves-effect"><a href="?page={{$i}}">{{$i}}</a></li>
        @endif
    @endfor

    {{-- Next Page Link --}}
    @if ($posts->hasMorePages())
    <li class="waves-effect"><a href="{{ $posts->nextPageUrl() }}"><i class="material-icons">chevron_right</i></a></li>
    @else
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    @endif
</ul>
