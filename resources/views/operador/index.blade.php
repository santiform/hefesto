@include('layouts.operador.header')


<div class="columnas" style="max-width: 900px; margin: 0 auto;">
    <div id="columna-1" class="tarjeta center">
        <a href="{{ route('operador.nuevo.informe') }}" class="boton">
          <i class="fa-regular fa-square-plus"></i> Nuevo informe
        </a>

        <!-- <br> <button class="boton" ><i class="fa-solid fa-file"></i> Mis informes</button> ESTO ES PARA MÁS ADELANTE-->
    </div>
</div>

@include('layouts.operador.footer')
