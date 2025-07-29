@if ($evaluaciones->hasPages())
    <nav>
        <ul class="pagination justify-content-center">

            {{-- Botón "Anterior" --}}
            @if ($evaluaciones->onFirstPage())
                <li class="page-item disabled"><span class="page-link">Anterior</span></li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $evaluaciones->previousPageUrl() }}" rel="prev">Anterior</a>
                </li>
            @endif

            {{-- Paginación compacta con elipsis --}}
            @php
                $start = max($evaluaciones->currentPage() - 2, 1);
                $end = min($evaluaciones->currentPage() + 2, $evaluaciones->lastPage());
            @endphp

            {{-- Primer página + ... si es necesario --}}
            @if ($start > 1)
                <li class="page-item"><a class="page-link" href="{{ $evaluaciones->url(1) }}">1</a></li>
                @if ($start > 2)
                    <li class="page-item disabled"><span class="page-link">...</span></li>
                @endif
            @endif

            {{-- Páginas intermedias --}}
            @for ($i = $start; $i <= $end; $i++)
                @if ($i == $evaluaciones->currentPage())
                    <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $evaluaciones->url($i) }}">{{ $i }}</a></li>
                @endif
            @endfor

            {{-- ... + última página si es necesario --}}
            @if ($end < $evaluaciones->lastPage())
                @if ($end < $evaluaciones->lastPage() - 1)
                    <li class="page-item disabled"><span class="page-link">...</span></li>
                @endif
                <li class="page-item"><a class="page-link" href="{{ $evaluaciones->url($evaluaciones->lastPage()) }}">{{ $evaluaciones->lastPage() }}</a></li>
            @endif

            {{-- Botón "Siguiente" --}}
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
