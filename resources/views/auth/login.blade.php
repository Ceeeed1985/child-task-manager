@extends('public.base')

@section('title', "Se connecter")

@section('content')


<div class="max-w-lg mx-auto p-6 bg-white rounded-md shadow-md mt-12">
    @if ($errors->any())
        <div class="bg-rose-100 text-rose-500 border-rose-500 px-4 py-3 rounded relative">
            <p class="font-bold">Oups ! Il semble y avoir un couac !</p>
            <p class="text-sm">{{ $errors->first() }}</p>
        </div>
    @endif
    <form action="{{ route('login.submit') }}" method="post" class="mt-4">
        @csrf
        <h1 class="text-sky-900 text-xl text-center mb-6">Merci de revenir nous voir !</h1>
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

        <button type="submit" class="w-full py-2 px-4 bg-sky-400 hover:bg-sky-900 text-white rounded-md">Se connecter</button>

        <p class="my-2 text-sm">Pas encore de compte ? <a href="{{ route('register') }}" class="font-bold text-sky-700">S'inscrire</a></p>
    </form>
</div>

@endsection    
