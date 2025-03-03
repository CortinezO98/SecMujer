@if ($evaluaciones->hasPages())
    <nav>
        <ul class="pagination justify-content-center">

            @if ($evaluaciones->onFirstPage())
                <li class="page-item disabled"><span class="page-link">Anterior</span></li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $evaluaciones->previousPageUrl() }}" rel="prev">Anterior</a>
                </li>
            @endif

            @foreach ($evaluaciones->getUrlRange(1, $evaluaciones->lastPage()) as $page => $url)
                @if ($page == $evaluaciones->currentPage())
                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            @if ($evaluaciones->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $evaluaciones->nextPageUrl() }}" rel="next">Siguiente</a>
                </li>
            @else
                <li class="page-item disabled"><span class="page-link">Siguiente</span></li>
            @endif
        </ul>
    </nav>
@endif