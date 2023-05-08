@extends('layouts.app')

@section('title', 'Register')

@section('contenido')



<div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-ls shadow-lg">
    <h1 class="text-5x1 text-center font-bold"> Registro </h1>

    <form class="mt-4 rounded-circle" method="POST" action="">
        @csrf
        {{-- Nombre --}}
        <input 
        type="name" 
        class=" border border-gray-200 rounded-md bg-gray-300 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="Nombre" 
        id="name"
        name="name">


        {{-- Email --}}
        <input 
        type="email" 
        class=" border border-gray-200 rounded-md bg-gray-300 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="Correo electronico" 
        id="email"
        name="email">


        {{-- Contraseña --}}
        <input 
        type="password" 
        class=" border border-gray-200 rounded-md bg-gray-300 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="Contraseña" 
        id="password"
        name="password">

        {{-- Confirmar contraseña --}}
        <input 
        type="password"
        class=" border border-gray-200 rounded-md bg-gray-300 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="Confirma tu contraseña" 
        id="password_confirmation"
        name="password_confirmation">

        
        {{-- Boton Log In --}}
        <button 
        type="submit"
        class=" rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600 focus:bg-indigo"        
        >Log in</button>

    </form>
</div>


@endsection