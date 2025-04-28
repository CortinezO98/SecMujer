@foreach($atributos as $atributo)
    @php $firstAtributo = true; @endphp

    @foreach($atributo->items as $item)
        @php $firstItem = true; @endphp

        @foreach($item->subitems as $subitem)
            @php $firstSubitem = true; @endphp

            @foreach($subitem->niveles as $nivel)
                <tr>
                    @if($firstAtributo)
                        <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->descripcion }}</td>
                        <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->peso }}%</td>
                        @php $firstAtributo = false; @endphp
                    @endif

                    @if($firstItem)
                        <td rowspan="{{ $item->rowSpan() }}">{{ $item->peso }}%</td>
                        <td rowspan="{{ $item->rowSpan() }}">{{ $item->descripcion }}</td>
                        @php $firstItem = false; @endphp
                    @endif

                    @if($firstSubitem)
                        <td rowspan="{{ count($subitem->niveles) }}">{{ $subitem->descripcion }}</td>
                        @php $firstSubitem = false; @endphp
                    @endif

                    <td>{{ $nivel->descripcion }}</td>

                    {{-- Cumple --}}
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"
                                name="nivel-{{ $nivel->id }}"
                                id="nivel{{ $nivel->id }}-1" value="1"
                                {{ $nivel->checkCumple($evaluacion->id, 1) }}
                                {{ $disabledCumple }}>
                        </div>
                    </td>

                    {{-- No Cumple --}}
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"
                                name="nivel-{{ $nivel->id }}"
                                id="nivel{{ $nivel->id }}-0" value="0"
                                {{ $nivel->checkCumple($evaluacion->id, 0) }}
                                {{ $disabledCumple }}>
                        </div>
                    </td>
                </tr>
            @endforeach

        @endforeach

    @endforeach
@endforeach
