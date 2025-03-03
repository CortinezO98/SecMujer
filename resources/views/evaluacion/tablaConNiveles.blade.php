@foreach($atributos as $atributo)
    <tr>
        <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->descripcion  }}  </td>
        <td rowspan="{{ $atributo->cantidadRowSpan() }}">{{ $atributo->peso  }}% </td>

        <td rowspan="{{ $atributo->items->first()->rowSpan() }}">{{$atributo->items->first()->peso}}%</td>
        <td rowspan="{{ $atributo->items->first()->rowSpan() }}">{{$atributo->items->first()->descripcion}}</td>

        <td rowspan="{{ $atributo->items->first()->rowSpan() }}">{{$atributo->items->first()->subitems->first()->descripcion}}</td>

        @if($evaluacion->tieneNiveles())
            <td>
                {{ $atributo->items->first()->subitems->first()->niveles->first()->descripcion }}
            </td>
        @endif

        <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" 
                name="nivel-{{ $atributo->items->first()->subitems->first()->id }}" 
                id="nivel{{ $atributo->items->first()->subitems->first()->id }}-1" value="1" checked>
            </div>
        </td>
        <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" 
                name="nivel-{{ $atributo->items->first()->subitems->first()->id }}" 
                id="nivel{{ $atributo->items->first()->subitems->first()->id }}-0" value="0">
            </div>
        </td>
    </tr>

    @foreach($atributo->items as $item)
        @if(!$loop->first) 
            <tr>
                <td rowspan="{{ $item->rowSpan() }}">{{ $item->peso }}%</td>
                <td rowspan="{{ $item->rowSpan() }}">{{ $item->descripcion }}</td>
                <td rowspan="{{ count($item->subitems->first()->niveles) }}">{{ $item->subitems->first()->descripcion }}</td>

                @if($evaluacion->tieneNiveles())
                    <td>
                        {{ $item->subitems->first()->niveles->first()->descripcion }}
                    </td>
                @endif

                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" 
                        name="nivel-{{ $item->subitems->first()->id }}" 
                        id="nivel{{ $item->subitems->first()->id }}-1" value="1" checked>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" 
                        name="nivel-{{ $item->subitems->first()->id }}" 
                        id="nivel{{ $item->subitems->first()->id }}-0" value="0">
                    </div>
                </td>
            </tr>
        @endif 

        @foreach($item->subitems as $subitem)
            @if(!$loop->first) 
                <tr>                                                                    
                    <td rowSpan="{{ count($subitem->niveles) }}">{{ $subitem->descripcion }}</td>

                    @if($evaluacion->tieneNiveles())
                        <td>
                            {{ $subitem->niveles->first()->descripcion }}
                        </td>
                    @endif

                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                            name="nivel-{{ $subitem->id }}" 
                            id="nivel{{ $subitem->id }}-1" value="1" checked>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                            name="nivel-{{ $subitem->id }}" 
                            id="nivel{{ $subitem->id }}-0" value="0">
                        </div>
                    </td>
                </tr>
            @endif 

            @foreach($subitem->niveles as $nivel)
                @if(!$loop->first) 
                    <tr>
                        <td>{{ $nivel->descripcion }} </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" 
                                name="nivel-{{ $nivel->id }}" 
                                id="nivel{{ $nivel->id }}-1" value="1" checked>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" 
                                name="nivel-{{ $nivel->id }}" 
                                id="nivel{{ $nivel->id }}-0" value="0">
                            </div>
                        </td>
                    </tr>
                @endif
            @endforeach

        @endforeach
    @endforeach
@endforeach