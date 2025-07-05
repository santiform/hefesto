@include('layouts.operador.header')


<div class="columnas" style="max-width: 900px; margin: 0 auto;">
    <div id="columna-1" class="tarjeta center">

    <div class="alerta alerta-exito">
        <p>{{$validacion}}</p>
    </div>

    <a href="{{ route('operador.nuevo.informe') }}" class="boton">
        <i class="fa-regular fa-square-plus"></i> Nuevo informe
    </a>

    </div>
</div>

@include('layouts.operador.footer')
