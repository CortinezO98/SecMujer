@foreach($atributos as $atributo)
    <tr>
        <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->descripcion  }}  </td>
        <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->peso  }}% </td>

        <td rowspan="{{ count($atributo->items->first()->subitems) }}">{{$atributo->items->first()->peso}}%</td>
        <td rowspan="{{ count($atributo->items->first()->subitems) }}">{{$atributo->items->first()->descripcion}}</td>

        <td>{{$atributo->items->first()->subitems->first()->descripcion}}</td>
        <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" 
                name="subitem-{{ $atributo->items->first()->subitems->first()->id }}" 
                id="subitem{{ $atributo->items->first()->subitems->first()->id }}-1" value="1" 
                {{ $atributo->items->first()->subitems->first()->checkCumple($evaluacion->id, 1) }}
                {{ $disabledCumple }}>
            </div>
        </td>
        <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" 
                name="subitem-{{ $atributo->items->first()->subitems->first()->id }}" 
                id="subitem{{ $atributo->items->first()->subitems->first()->id }}-0" value="0"
                {{ $atributo->items->first()->subitems->first()->checkCumple($evaluacion->id, 0) }}
                {{ $disabledCumple }}>
            </div>
        </td>
    </tr>

    @foreach($atributo->items as $item)
        @if(!$loop->first) 
            <tr>
                <td rowspan="{{ count($item->subitems) }}">{{ $item->peso }}%</td>
                <td rowspan="{{ count($item->subitems) }}">{{ $item->descripcion }}</td>
                <td>{{ $item->subitems->first()->descripcion }}</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" 
                        name="subitem-{{ $item->subitems->first()->id }}" 
                        id="subitem{{ $item->subitems->first()->id }}-1" value="1" 
                        {{$item->subitems->first()->checkCumple($evaluacion->id, 1) }}
                        {{ $disabledCumple }}>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" 
                        name="subitem-{{ $item->subitems->first()->id }}" 
                        id="subitem{{ $item->subitems->first()->id }}-0" value="0"
                        {{$item->subitems->first()->checkCumple($evaluacion->id, 0) }}
                        {{ $disabledCumple }}>
                    </div>
                </td>
            </tr>
        @endif 

        @foreach($item->subitems as $subitem)
            @if(!$loop->first) 
                <tr>
                    <td>{{ $subitem->descripcion }}</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                            name="subitem-{{ $subitem->id }}" 
                            id="subitem{{ $subitem->id }}-1" value="1"
                            {{$subitem->checkCumple($evaluacion->id, 1) }}
                            {{ $disabledCumple }}>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                            name="subitem-{{ $subitem->id }}" 
                            id="subitem{{ $subitem->id }}-0" value="0"
                            {{$subitem->checkCumple($evaluacion->id, 0) }}
                            {{ $disabledCumple }}>
                        </div>
                    </td>
                </tr>
            @endif 
        @endforeach
    @endforeach
@endforeach