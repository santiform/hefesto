@include('layouts.operador.header')


<div class="columnas" style="max-width: 900px; margin: 0 auto;">
    <div id="columna-1" class="tarjeta center">

        <h2>NUEVO INFORME</h2>
    
        <b>Seleccioná un edificio:</b> <br>

        @foreach ($edificios as $edificio)
            <form method="POST" action="{{ route('operador.nuevo.informe.2') }}" style="display:inline;">
                @csrf
                <input type="hidden" name="edificio" value="{{ $edificio }}">
                <button type="submit" class="boton" style="width: 230px">
                    <i class="fa-solid fa-arrow-right"></i> {{ $edificio }} <i class="fa-solid fa-arrow-left"></i>
                </button>
            </form>
        @endforeach

    </div>
</div>

@include('layouts.operador.footer')
