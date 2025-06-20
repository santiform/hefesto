<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo de Mini Framework</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('sefcssframework/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('sefcssframework/header.css') }}">

</head>
<body>

    <header class="header">
      <div class="header-contenedor">
        
        <div class="logo-sistema">
          <img src="{{ asset('sefcssframework/logo.png') }}" alt="Logo" class="logo-img">

          <div class="nombre-sistema">
            <span class="empresa">HEFESTO</span>
            <span class="sistema">Sistema de Informes</span>
          </div>
        </div>

        <button class="hamburguesa" onclick="document.querySelector('.menu').classList.toggle('mostrar')">
          <i class="fas fa-bars"></i> <!-- Ícono de la hamburguesa -->
        </button>


        <nav class="menu">
          <a href="#"><i class="fa-solid fa-house"></i> Inicio</a>
          <a href="#"><i class="fa-solid fa-chart-column"></i> Reportes</a>
          <a href="#"><i class="fa-solid fa-users"></i> Usuarios</a>
          <a href="#"><i class="fa-solid fa-cog"></i> Configuración</a>
        </nav>
      </div>
    </header>




    <!-- Contenedor Principal -->
    <div class="container">
        <h1>Ejemplo de Diseño con Columnas</h1>
        
        <!-- Botón -->
        <button class="boton" onclick="abrirModal()"><i class="fa-solid fa-trash-can"></i> Eliminar</button>

        <div class="alerta alerta-exito">
            <p>¡Operación Exitosa!</p>
        </div>

        <div class="alerta alerta-error">
            <p>¡Hubo un error!</p>
        </div>

        <div class="alerta alerta-aviso">
            <p>¡Aviso importante!</p>
        </div>


        <!-- Diseño de Columnas -->
        <div class="columnas">
            <!-- 1 Columna -->
            <div id="columna-1" class="tarjeta">
                <h2>1 Columna</h2>
                <p>Contenido de la primera columna.</p>
            </div>
        </div>

        <div class="columnas">
            <!-- 2 Columnas -->
            <div id="columna-1" class="tarjeta">
                <h2>Columna 1</h2>
                <p>Contenido de la primera columna.</p>
            </div>
            <div id="columna-2" class="tarjeta">
                <h2>Columna 2</h2>
                <p>Contenido de la segunda columna.</p>
            </div>
        </div>

        <div class="columnas">
            <!-- 3 Columnas -->
            <div id="columna-1" class="tarjeta">
                <h2>Columna 1</h2>
                <p>Contenido de la primera columna.</p>
            </div>
            <div id="columna-2" class="tarjeta">
                <h2>Columna 2</h2>
                <p>Contenido de la segunda columna.</p>
            </div>
            <div id="columna-3" class="tarjeta">
                <h2>Columna 3</h2>
                <p>Contenido de la tercera columna.</p>
            </div>
        </div>

        <div class="columnas">
            <!-- 4 Columnas -->
            <div id="columna-1" class="tarjeta">
                <h2>Columna 1</h2>
                <p>Contenido de la primera columna.</p>
            </div>
            <div id="columna-2" class="tarjeta">
                <h2>Columna 2</h2>
                <p>Contenido de la segunda columna.</p>
            </div>
            <div id="columna-3" class="tarjeta">
                <h2>Columna 3</h2>
                <p>Contenido de la tercera columna.</p>
            </div>
            <div id="columna-4" class="tarjeta">
                <h2>Columna 4</h2>
                <p>Contenido de la cuarta columna.</p>
            </div>
        </div>

        <div class="columnas">
            <!-- 5 Columnas -->
            <div id="columna-1" class="tarjeta">
                <h2>Columna 1</h2>
                <p>Contenido de la primera columna.</p>
            </div>
            <div id="columna-2" class="tarjeta">
                <h2>Columna 2</h2>
                <p>Contenido de la segunda columna.</p>
            </div>
            <div id="columna-3" class="tarjeta">
                <h2>Columna 3</h2>
                <p>Contenido de la tercera columna.</p>
            </div>
            <div id="columna-4" class="tarjeta">
                <h2>Columna 4</h2>
                <p>Contenido de la cuarta columna.</p>
            </div>
            <div id="columna-5" class="tarjeta">
                <h2>Columna 5</h2>
                <p>Contenido de la quinta columna.</p>
            </div>
        </div>

<div id="modal-confirmacion" class="modal">
  <div class="modal-contenido">
    <i class="fa-solid fa-trash-can"></i>
    <h2>¿Eliminar?</h2>
    <p>Esta acción no se puede deshacer.</p>
    <div class="modal-acciones">
      <button class="btn-confirmar" onclick="confirmarAccion()">Sí, eliminar</button>
      <button class="btn-cancelar" onclick="cerrarModal()">Cancelar</button>
  </div>
</div>

        
<script>
  const toggleBtn = document.getElementById('toggleMenu');
  const menu = document.querySelector('.menu');

  toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('mostrar');
  });

  function abrirModal() {
      document.getElementById('modal-confirmacion').style.display = 'flex';
    }

    function cerrarModal() {
      document.getElementById('modal-confirmacion').style.display = 'none';
    }

    function confirmarAccion() {
      cerrarModal();
      alert('Elemento eliminado'); // acá ponés la acción real
    }

</script>


</body>
</html>
