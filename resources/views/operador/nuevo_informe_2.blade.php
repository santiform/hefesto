@include('layouts.operador.header')


<div class="columnas" style="max-width: 900px; margin: 0 auto;">
    <div id="columna-1" class="tarjeta center">

        <h2>NUEVO INFORME</h2>    

        <p><b>Edificio:</b> {{$edificio}}</p>

        <p><b>Seleccioná una familia:</b> </p>

        @foreach ($familias as $familia)
            <form method="POST" action="{{ route('operador.nuevo.informe.3') }}" style="display:inline;">
                @csrf
                <input type="hidden" name="edificio" value="{{ $edificio }}">
                <input type="hidden" name="familia" value="{{ $familia }}">
                <button type="submit" class="boton" style="width: 230px">
                    <i class="fa-solid fa-arrow-right"></i> {{ $familia }} <i class="fa-solid fa-arrow-left"></i>
                </button>
            </form>
        @endforeach

    </div>
</div>

@include('layouts.operador.footer')
