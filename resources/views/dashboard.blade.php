@extends('public.base')

@section('title', "Dashboard")

@section('content')

<div class="p-6">
    <h1 class="text-sky-900 text-3xl">Dashboard</h1>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="py-2 px-4 bg-orange-500 hover:bg-orange-700 text-white rounded-md">Déconnexion</button>
    </form>
</div>

@endsection    
