@include('layouts.header')

<!-- Lightbox CSS (puede ir en <head>) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />



<h2>Informe #{{ $informe->id }}</h2>

{{-- BLOQUE DE DATOS GENERALES --}}
<div class="tarjeta" style="margin-block: 1rem; padding: 1.5rem;">
    <h3>Información general</h3>
    <div class="columnas">
        <div class="borde">
            <p><strong>Edificio:</strong><br>{{ $informe->edificio }}</p>
            <p><strong>Familia:</strong><br>{{ $informe->familia }}</p>
        </div>
        <div class="borde">
            <p><strong>Ubicación:</strong><br>{{ $informe->ubicacion }}</p>
            <p><strong>Estado:</strong><br>{{ $informe->estado }}</p>
        </div>
        <div class="borde">
            <p><strong>Fecha:</strong><br>{{ \Carbon\Carbon::parse($informe->created_at)->format('d/m/Y H:i') }}</p>
        </div>
    </div>
</div>

{{-- BLOQUE DE TAREAS --}}
<div class="tarjeta" style="margin-block: 1rem; padding: 1.5rem;">
    <h3>Tareas realizadas</h3>
    <div class="columnas">
        @foreach ([
            'limpieza_filtros' => 'Limpieza de filtros',
            'limpieza_evaporador' => 'Limpieza de evaporador',
            'lubricacion_bujes_motor' => 'Lubricación bujes motor',
            'lubricacion_bujes_blower' => 'Lubricación bujes blower',
            'limpieza_blower_evaporador' => 'Limpieza blower evaporador',
            'ajuste_contacto_electrico' => 'Ajuste contacto eléctrico',
            'limpieza_caja_electrica' => 'Limpieza caja eléctrica',
            'limpieza_drenaje_bomba_bandeja' => 'Limpieza drenaje bomba bandeja',
            'verificacion_termostato' => 'Verificación termostato',
            'limpieza_unidad_condensadora' => 'Limpieza unidad condensadora',
        ] as $campo => $etiqueta)
            <div class="borde">
                <p><strong>{{ $etiqueta }}:</strong><br>{{ $informe->$campo ? '✔️ Sí' : '❌ No' }}</p>
            </div>
        @endforeach
    </div>
</div>

{{-- BLOQUE DE LECTURAS --}}
<div class="tarjeta" style="margin-block: 1rem; padding: 1.5rem;">
    <h3>Lecturas Técnicas</h3>
    <div class="columnas">
        <div class="borde"><p><strong>Presión baja (antes):</strong><br>{{ $informe->presion_baja_antes }}</p></div>
        <div class="borde"><p><strong>Presión baja (después):</strong><br>{{ $informe->presion_baja_despues }}</p></div>
        <div class="borde"><p><strong>Presión alta (antes):</strong><br>{{ $informe->presion_alta_antes }}</p></div>
        <div class="borde"><p><strong>Presión alta (después):</strong><br>{{ $informe->presion_alta_despues }}</p></div>
        <div class="borde"><p><strong>Amperaje compresor (antes):</strong><br>{{ $informe->amperaje_compresor_antes }}</p></div>
        <div class="borde"><p><strong>Amperaje compresor (después):</strong><br>{{ $informe->amperaje_compresor_despues }}</p></div>
        <div class="borde"><p><strong>Voltaje alimentación (antes):</strong><br>{{ $informe->voltaje_alimentacion_antes }}</p></div>
        <div class="borde"><p><strong>Voltaje alimentación (después):</strong><br>{{ $informe->voltaje_alimentacion_despues }}</p></div>
        <div class="borde"><p><strong>Temp. inyección aire (antes):</strong><br>{{ $informe->inyeccion_aire_temp_antes }}</p></div>
        <div class="borde"><p><strong>Temp. inyección aire (después):</strong><br>{{ $informe->inyeccion_aire_temp_despues }}</p></div>
    </div>
</div>

{{-- BLOQUE DE OBSERVACIONES --}}
<div class="tarjeta" style="margin-block: 1rem; padding: 1.5rem;">
    <h3>Observaciones</h3>
    <p>{{ $informe->observaciones }}</p>
</div>

{{-- BLOQUE DE FOTOS --}}
@php
    $fotos = collect(['foto1', 'foto2', 'foto3'])->filter(fn($campo) => !empty($informe->$campo));
@endphp

@if ($fotos->isNotEmpty())
    <div class="tarjeta" style="margin-block: 1rem; padding: 1.5rem;">
        <h3 style="margin-bottom: 1rem;">Fotos</h3>
        <div class="columnas">
            @foreach ($fotos as $foto)
                <div>
                    <a href="{{ asset('storage/fotos-informes/' . $informe->$foto) }}"
                       data-lightbox="fotos-informe-{{ $informe->id }}"
                       data-title="Foto asociada al informe #{{ $informe->id }}">
                        <img src="{{ asset('storage/fotos-informes/' . $informe->$foto) }}"
                             alt="Foto del informe"
                             style="width: 100%; max-width: 400px; border-radius: 10px; box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endif


{{-- BOTONES --}}
<div class="center" style="margin-top: 2rem;">
    <a href="{{ route('admin.informes.show', $informe->id) }}" class="boton"><i class="fas fa-pen"></i> Editar</a>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>




@include('layouts.footer')

