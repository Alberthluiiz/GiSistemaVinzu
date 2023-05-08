<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') VinZu 1.0 </title>
    <!-- Agregue el archivo CSS de Tailwind a su proyecto -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css">
    <!-- Agregue los archivos CSS de Bootstrap a su proyecto -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body class=" bg-light ">
        

  <nav class="flex py-4 bg-indigo-500 text-white rounded">
    <div class="px-12 mr-auto d-flex align-items-center">
      <p class="font-bold" style="font-size: 35px">VinZu 1.0</p>
    </div>
    <ul class="w-1/2 px-16 ml-auto flex justify-end pt">
      {{-- Si esta iniciado sesion muestra la siguiente pantalla --}}
      @if(auth()->check())
      <li class="mx-4">
        <p style="font-size: 18"> Bienvenido <b> {{ auth()->user()->name }} </b></p>
            
      </li>
      <li class="d-flex align-items-center">
            <a  href="{{ route('login.destroy')}}"
            class="font-weight-bold 
            text-sm-center 
            text-white
            text-decoration-none"
            style="font-size: 18px"
            >Salir</a>
      </li>
      @else
      <li class="mx-4 d-flex align-items-center">
        <a  href="{{route('login.index')}}"
            class="font-weight-bold 
            text-sm-center 
            text-white
            text-decoration-none"
            style="font-size: 18px"
            >Iniciar Sesión</a>
            
      </li>
      <li class="d-flex align-items-center">
            <a  href="{{route('register.index')}}"
            class="font-weight-bold 
            text-sm-center 
            text-white
            text-decoration-none"
            style="font-size: 18px"
            >Registrarse</a>
      </li>
      @endif
    </ul>
  </nav>
  


    @yield('contenido')

    <!-- Agregue los archivos JavaScript de jQuery y Bootstrap a su proyecto -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


{{-- 
@if (auth()->check())
gap-4 -> damos espacion entre ambas etiquetas
<nav class="ml-auto d-flex gap-4">
  <p class="text-xl">Bienvenido <b> {{ auth()->user()->name }} </b></p>

  <a href="#">Salir</a>
</nav>
@else
gap-4 -> damos espacion entre ambas etiquetas
<nav class="ml-auto d-flex gap-4">
  <a  href="{{route('login.index')}}"
  class="font-weight-bold 
  text-uppercase text-white 
  text-sm-center 
  text-decoration-none">Iniciar Sesión</a>

  <a href="{{route('login.index')}}"
  class="font-weight-bold 
  text-uppercase text-white 
  text-sm-center 
  Remplazamos el href="register" por un gelper de laravel {{}}
  text-decoration-none">Crear Cuenta</a>
</nav>
@endif --}}