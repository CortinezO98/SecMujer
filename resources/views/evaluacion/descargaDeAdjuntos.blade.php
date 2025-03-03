<div class="row">
    <div class="col pt-4">
        <div class="list-group">
            <a class="list-group-item list-group-item-action disabled" aria-disabled="true">
                <b>
                    @if($evaluacion->adjuntos->isEmpty())
                        No se adjuntaron archivos a esta evaluación
                    @else  
                        Archivos Adjuntos
                    @endif
                </b>
            </a>
            @foreach($evaluacion->adjuntos as $adjunto)
                <a href="{{ route('downloadAdjunto', $adjunto->id) }}" class="list-group-item list-group-item-action">
                    {{ $adjunto->nombre_archivo }} 
                    @if($adjunto->eliminado)
                        <span class="badge rounded-pill text-bg-secondary">No disponible</span>
                    @else
                        <span class="badge rounded-pill text-bg-success">Disponible</span>
                    @endif
                </a>
            @endforeach
        </div>
    </div>
</div>