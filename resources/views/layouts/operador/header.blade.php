<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de informes</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('sefcssframework/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('sefcssframework/header.css') }}">

    <style>
        .header-contenedor {
            max-width: 880px; /* Usamos 94% del ancho de la ventana */
        }
    </style>

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

            <a href="{{ route('operador.index') }}"><i class="fa-solid fa-house"></i> Inicio</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
            <a href="#" onclick="abrirModalLogout(event);">
                <i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión
            </a>

        </nav>
      </div>
    </header>

    <!-- Contenedor Principal -->
    <div class="container">