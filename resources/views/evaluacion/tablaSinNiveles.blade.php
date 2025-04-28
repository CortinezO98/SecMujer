@foreach($atributos as $atributo)
    @php $firstAtributo = true; @endphp

    @foreach($atributo->items as $item)
        @php $firstItem = true; @endphp

        @foreach($item->subitems as $subitem)
            <tr>
                @if($firstAtributo)
                    <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->descripcion }}</td>
                    <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->peso }}%</td>
                    @php $firstAtributo = false; @endphp
                @endif

                @if($firstItem)
                    <td rowspan="{{ $item->subitems->count() }}">{{ $item->peso }}%</td>
                    <td rowspan="{{ $item->subitems->count() }}">{{ $item->descripcion }}</td>
                    @php $firstItem = false; @endphp
                @endif

                {{-- Subitem --}}
                <td>{{ $subitem->descripcion }}</td>

                {{-- Cumple --}}
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"
                            name="subitem-{{ $subitem->id }}"
                            id="subitem{{ $subitem->id }}-1" value="1"
                            {{ $subitem->checkCumple($evaluacion->id, 1) }}
                            {{ $disabledCumple }}>
                    </div>
                </td>

                {{-- No Cumple --}}
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"
                            name="subitem-{{ $subitem->id }}"
                            id="subitem{{ $subitem->id }}-0" value="0"
                            {{ $subitem->checkCumple($evaluacion->id, 0) }}
                            {{ $disabledCumple }}>
                    </div>
                </td>
            </tr>
        @endforeach
    @endforeach
@endforeach
