@extends('layout.app')

@section('title', "Ajouter un enfant")

@section('content')

<div class="pt-6 px-12">
    <h1 class="text-sky-600 text-3xl font-bold mb-12">Ajouter un enfant</h1>
    <div class="flex gap-8 w-1/4">
        <form action="{{ route('members.update', $member->id) }}" method="post" class="w-full" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-col gap-2 mb-4">
                <label for="firstname" class="text-white text-lg w-full">Prénom :</label>
                <input id="firstname" name="firstname" type="text" value="{{ $member->firstname }}" class="mt-1 p-3 block w-full bg-white border border-gray-300 rounded-md shadow-md">
            </div>
            <div class="flex flex-col gap-2 mb-4">
                <label for="lastname" class="text-white text-lg w-full">Nom :</label>
                <input id="lastname" name="lastname" type="text" value="{{ $member->lastname }}" class="mt-1 p-3 block w-full bg-white border border-gray-300 rounded-md shadow-md">
            </div>
            <div class="flex flex-col gap-2 mb-6">
                <label for="avatar" class="text-white text-lg w-full">Choisissez une nouvelle photo :</label>
                <input id="avatar" name="avatar" type="file" class="mt-1 p-3 block w-full bg-white border border-gray-300 rounded-md shadow-md">
            </div>
            <button type="submit" class="bg-sky-600 hover:bg-sky-800 text-white px-4 py-2 rounded">Mettre à jour</button>
        </form>
    </div>
    
</div>

@endsection