@include('layouts.operador.header')


<div class="columnas" style="max-width: 900px; margin: 0 auto;">
    <div id="columna-1" class="tarjeta center">

        <h2>NUEVO INFORME</h2>

        <p><b>Edificio:</b> {{$edificio}} | <b>Familia:</b> {{$familia}}</p>

        <p><b>Equipo:</b> {{$equipo->ubicacion}}</p>

    <form id="formInforme" action="{{ route('operador.nuevo.informe.5') }}" method="POST">
        <input type="hidden" name="equipo" value="{{ $equipo->id }}">
    <hr>
    @csrf

    {{-- Checkbox booleanos --}}
    @php
        $checkboxes = [
            'limpieza_filtros' => 'Limpieza de filtros',
            'limpieza_evaporador' => 'Limpieza del evaporador',
            'lubricacion_bujes_motor' => 'Lubricación de bujes o rodamientos del motor',
            'lubricacion_bujes_blower' => 'Lubricación de bujes o rodamientos de eje del blower',
            'limpieza_blower_evaporador' => 'Limpieza de blower evaporador',
            'ajuste_contacto_electrico' => 'Ajuste de contacto eléctrico',
            'limpieza_caja_electrica' => 'Limpieza de caja eléctrica o tablero',
            'limpieza_drenaje_bomba_bandeja' => 'Limpieza de drenaje, cuba de bomba de cond. y/o bandeja',
            'verificacion_termostato' => 'Verificación de operatividad del termostato',
            'limpieza_unidad_condensadora' => 'Limpieza de unidad condensadora',
        ];
    @endphp

    @foreach ($checkboxes as $campo => $label)
        <div class="checkbox-div">
            <input type="hidden" name="{{ $campo }}" value="0" />
            <label>
                <input type="checkbox" name="{{ $campo }}" value="1" {{ old($campo) == 1 ? 'checked' : '' }}>
                {{ $label }}
            </label>
        </div>
    @endforeach

    {{-- Inputs numéricos --}}
    @php
        $numericos = [
            'presion_baja_antes' => 'Presión de baja (antes)',
            'presion_baja_despues' => 'Presión de baja (después)',
            'presion_alta_antes' => 'Presión de alta (antes)',
            'presion_alta_despues' => 'Presión de alta (después)',
            'amperaje_compresor_antes' => 'Amperaje del compresor/motor (antes)',
            'amperaje_compresor_despues' => 'Amperaje del compresor/motor (después)',
            'voltaje_alimentacion_antes' => 'Voltaje de alimentación (antes)',
            'voltaje_alimentacion_despues' => 'Voltaje de alimentación (después)',
            'inyeccion_aire_temp_antes' => 'Inyección de aire [Temp] (antes)',
            'inyeccion_aire_temp_despues' => 'Inyección de aire [Temp] (después)',
        ];
    @endphp

    <br><hr><br>

    @foreach ($numericos as $campo => $label)
        <div class="input-div">
            <label for="{{ $campo }}">{{ $label }}</label>
            <input
                type="number"
                step="any"
                name="{{ $campo }}"
                id="{{ $campo }}"
                value="{{ old($campo) }}"
            >
        </div>
    @endforeach

    <div class="center" ><button type="submit" onclick="abrirModalInforme(event)" class="boton"><i class="fa-solid fa-paper-plane"></i> Enviar informe</button></div>
</form>



    </div>
</div>

@include('layouts.operador.footer')
