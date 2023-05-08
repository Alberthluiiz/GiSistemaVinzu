@extends('layouts.app')

@section('title', 'Login')

@section('contenido')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-ls shadow-lg">
    <h1 class="text-5x1 text-center font-bold"> Login </h1>

    <form class="mt-4 rounded-circle" method="POST" action="">
        @csrf
        
        {{-- Email --}}
        <input 
        type="email" 
        class=" border border-gray-200 rounded-md bg-gray-300 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="Nombre" 
        id="email"
        name="email">
        {{-- Mensaje de error autenticacion --}}
        @error('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">
        Correo electronico incorrecto</p>
        @enderror

        {{-- Contraseña --}}
        <input 
        type="password" 
        class=" border border-gray-200 rounded-md bg-gray-300 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="Contraseña" 
        id="password"
        name="password">
        {{-- Mensaje de error autenticacion --}}
        @error('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">
        Contraseña incorrecta</p>
        @enderror

        {{-- Boton Log In --}}
        <button type="submit"
        class=" rounded-md bg-indigo-500 w-full text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600">Iniciar Sesión</button>
    </form>
</div>
    
@endsection