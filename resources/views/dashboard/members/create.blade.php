@extends('layout.app')

@section('title', "Ajouter un enfant")

@section('content')

<div class="pt-6 px-12">
    <h1 class="text-sky-600 text-3xl font-bold mb-12">Ajouter un enfant</h1>
    <div class="flex gap-8 w-1/3">
        <form action="" method="post">
            @csrf
            <div class="flex flex-col gap-2">
                <label for="firstname" class="text-white text-lg w-full">Prénom de <span class="text-sky-600">l'enfant</span></label>
                <input id="firstname" type="text" class="bg-white w-full" required>
            </div>
        </form>
    </div>
    
</div>

@endsection