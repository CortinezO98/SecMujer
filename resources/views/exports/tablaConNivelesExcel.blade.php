@foreach($atributos as $atributo)
    <tr>
        <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->descripcion }}</td>
        <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->peso }}%</td>

        <td rowspan="{{ $atributo->items->first()->rowSpan() }}">
            {{ $atributo->items->first()->peso }}%
        </td>
        <td rowspan="{{ $atributo->items->first()->rowSpan() }}">
            {{ $atributo->items->first()->descripcion }}
        </td>
        <td rowspan="{{ $atributo->items->first()->rowSpan() }}">
            {{ $atributo->items->first()->subitems->first()->descripcion }}
        </td>

        @if($evaluacion->tieneNiveles())
            <td>
                {{ $atributo->items->first()->subitems->first()->niveles->first()->descripcion }}
            </td>
        @endif

        <td>
            {{ $atributo->items->first()->subitems->first()->niveles->first()->checkCumple($evaluacion->id, 1) == 'checked' ? 'Cumple' : '' }}
        </td>
        <td>
            {{ $atributo->items->first()->subitems->first()->niveles->first()->checkCumple($evaluacion->id, 0) == 'checked' ? 'No Cumple' : '' }}
        </td>
    </tr>

    @foreach($atributo->items as $item)
        @if(!$loop->first)
            <tr>
                <td rowspan="{{ $item->rowSpan() }}">{{ $item->peso }}%</td>
                <td rowspan="{{ $item->rowSpan() }}">{{ $item->descripcion }}</td>
                <td rowspan="{{ count($item->subitems->first()->niveles) }}">
                    {{ $item->subitems->first()->descripcion }}
                </td>

                @if($evaluacion->tieneNiveles())
                    <td>
                        {{ $item->subitems->first()->niveles->first()->descripcion }}
                    </td>
                @endif

                <td>
                    {{ $item->subitems->first()->niveles->first()->checkCumple($evaluacion->id, 1) == 'checked' ? 'Cumple' : '' }}
                </td>
                <td>
                    {{ $item->subitems->first()->niveles->first()->checkCumple($evaluacion->id, 0) == 'checked' ? 'No Cumple' : '' }}
                </td>
            </tr>
        @endif

        @foreach($item->subitems as $subitem)
            @if(!$loop->first)
                <tr>
                    <td rowspan="{{ count($subitem->niveles) }}">
                        {{ $subitem->descripcion }}
                    </td>

                    @if($evaluacion->tieneNiveles())
                        <td>
                            {{ $subitem->niveles->first()->descripcion }}
                        </td>
                    @endif

                    <td>
                        {{ $subitem->niveles->first()->checkCumple($evaluacion->id, 1) == 'checked' ? 'Cumple' : '' }}
                    </td>
                    <td>
                        {{ $subitem->niveles->first()->checkCumple($evaluacion->id, 0) == 'checked' ? 'No Cumple' : '' }}
                    </td>
                </tr>
            @endif

            @foreach($subitem->niveles as $nivel)
                @if(!$loop->first)
                    <tr>
                        <td>{{ $nivel->descripcion }}</td>
                        <td>
                            {{ $nivel->checkCumple($evaluacion->id, 1) == 'checked' ? 'Cumple' : '' }}
                        </td>
                        <td>
                            {{ $nivel->checkCumple($evaluacion->id, 0) == 'checked' ? 'No Cumple' : '' }}
                        </td>
                    </tr>
                @endif
            @endforeach
        @endforeach
    @endforeach
@endforeach
