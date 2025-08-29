@extends('public.base')

@section('title', "Inscription")

@section('content')


<div class="max-w-lg mx-auto p-6 bg-white rounded-md shadow-md mt-12">
    @if (session('success'))
        <div class="bg-sky-100 text-sky-500 border-sky-500 px-4 py-3 rounded relative">
            <p class="font-bold">Inscription réussie !</p>
            <p class="text-sm">{{ session('success') }}</p>
        </div>
    @else
    <form action="{{ route('registration.register') }}" method="post" class="mt-4">
        @csrf
        <h1 class="text-sky-900 text-xl text-center mb-6">Formulaire d'inscription</h1>
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-sky-700">Nom : </label>
            <input id="name" name="name" type="text" class="mt-1 p-3 block w-full border border-gray-300 rounded-md shadow-md">
            @error('name')
                <p class="bg-red-100 text-red-500 p-3 font-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-sky-700">Email : </label>
            <input id="email" name="email" type="email" class="mt-1 p-3 block w-full border border-gray-300 rounded-md shadow-md">
            @error('email')
                <p class="bg-red-100 text-red-500 p-3 font-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-sky-700">Mot de passe : </label>
            <input id="password" name="password" type="password" class="mt-1 p-3 block w-full border border-gray-300 rounded-md shadow-md">
            @error('password')
                <p class="bg-red-100 text-red-500 p-3 font-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-sky-700">Confirmer mot de passe : </label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 p-3 block w-full border border-gray-300 rounded-md shadow-md">
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-sky-400 hover:bg-sky-900 text-white rounded-md">S'inscrire</button>

        <p class="my-2 text-sm">Déjà un compte ? <a href="{{ route('login') }}" class="font-bold text-sky-700">Se connecter</a></p>
    </form>
    @endif
</div>

@endsection    
