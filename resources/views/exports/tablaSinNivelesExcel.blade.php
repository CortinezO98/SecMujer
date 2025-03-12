@foreach($atributos as $atributo)
    <tr>
        <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->descripcion }}</td>
        <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->peso }}%</td>

        <td rowspan="{{ count($atributo->items->first()->subitems) }}">
            {{ $atributo->items->first()->peso }}%
        </td>
        <td rowspan="{{ count($atributo->items->first()->subitems) }}">
            {{ $atributo->items->first()->descripcion }}
        </td>

        <td>
            {{ $atributo->items->first()->subitems->first()->descripcion }}
        </td>
        <td>
            {{ $atributo->items->first()->subitems->first()->checkCumple($evaluacion->id, 1) == 'checked' ? 'Cumple' : '' }}
        </td>
        <td>
            {{ $atributo->items->first()->subitems->first()->checkCumple($evaluacion->id, 0) == 'checked' ? 'No Cumple' : '' }}
        </td>
    </tr>

    @foreach($atributo->items as $item)
        @if(!$loop->first)
            <tr>
                <td rowspan="{{ count($item->subitems) }}">
                    {{ $item->peso }}%
                </td>
                <td rowspan="{{ count($item->subitems) }}">
                    {{ $item->descripcion }}
                </td>
                <td>
                    {{ $item->subitems->first()->descripcion }}
                </td>
                <td>
                    {{ $item->subitems->first()->checkCumple($evaluacion->id, 1) == 'checked' ? 'Cumple' : '' }}
                </td>
                <td>
                    {{ $item->subitems->first()->checkCumple($evaluacion->id, 0) == 'checked' ? 'No Cumple' : '' }}
                </td>
            </tr>
        @endif

        @foreach($item->subitems as $subitem)
            @if(!$loop->first)
                <tr>
                    <td>
                        {{ $subitem->descripcion }}
                    </td>
                    <td>
                        {{ $subitem->checkCumple($evaluacion->id, 1) == 'checked' ? 'Cumple' : '' }}
                    </td>
                    <td>
                        {{ $subitem->checkCumple($evaluacion->id, 0) == 'checked' ? 'No Cumple' : '' }}
                    </td>
                </tr>
            @endif
        @endforeach
    @endforeach
@endforeach
