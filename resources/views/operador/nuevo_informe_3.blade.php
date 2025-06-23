@include('layouts.operador.header')


<div class="columnas" style="max-width: 900px; margin: 0 auto;">
    <div id="columna-1" class="tarjeta center">

        <h2>NUEVO INFORME</h2>
    
        <b>Seleccioná un equipo:</b> <br>

        <input type="text" id="buscadorEquipos" placeholder="Buscar..." style="margin-bottom: 1rem; width: 230px;">

        <div id="listaEquipos">
            <div class="botones-columna">
              @foreach ($equipos as $equipo)
                <form method="POST" action="{{ route('operador.nuevo.informe.4') }}" class="equipo-item" style="display:block; margin-bottom:10px;">
                  @csrf
                  <input type="hidden" name="edificio" value="{{ $edificio }}">
                  <input type="hidden" name="familia" value="{{ $familia }}">
                  <input type="hidden" name="equipo" value="{{ $equipo }}">
                  <button type="submit" class="boton" style="width: 300px">
                      <i class="fa-solid fa-arrow-right"></i> {{ $equipo }} <i class="fa-solid fa-arrow-left"></i>
                  </button>
                </form>
              @endforeach
            </div>
        </div>

        <script>
            const buscador = document.getElementById('buscadorEquipos');
            const items = document.querySelectorAll('.equipo-item');

            buscador.addEventListener('keyup', function() {
                const texto = this.value.toLowerCase();
                items.forEach(item => {
                    const nombre = item.textContent.toLowerCase();
                    if (nombre.includes(texto)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        </script>

    </div>
</div>

@include('layouts.operador.footer')
