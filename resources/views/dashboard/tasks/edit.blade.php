@extends('layout.app')

@section('title', "Modifier une tâche")

@section('content')
<div class="pt-6 px-12">
    <h1 class="text-sky-600 text-3xl font-bold mb-12">Modifier une tâche :</h1>
    <div class="flex gap-8 w-1/4">
        <form action="{{ route('tasks.update', $task->id) }}" method="post" class="w-full" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-col gap-1 mb-4">
                
                <label for="category_id" class="text-white text-lg w-full">Catégories</label>
                <select id="category_id" name="category_id" type="number" class="mt-1 p-3 block w-full bg-white border border-gray-300 rounded-md shadow-md">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id == $task->category_id) selected @endif>
                            
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex flex-col gap-1 mb-4">
                <label for="name" class="text-white text-lg w-full">Tâche</label>
                <input id="name" name="name" type="text" value="{{ $task->name }}" class="mt-1 p-3 block w-full bg-white border border-gray-300 rounded-md shadow-md">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex gap-8 mb-4">
                <div class="flex flex-col gap-1">
                    <label for="points" class="text-white text-lg w-full">Points</label>
                    <input id="points" name="points" type="number" value="{{ $task->points }}" class="mt-1 p-3 block w-full bg-white border border-gray-300 rounded-md shadow-md">
                    @error('points')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 mb-4">
                    <label for="initiative_points" class="text-white text-lg w-full">Initiative points</label>
                    <input id="initiative_points" name="initiative_points" type="number" value="{{ $task->initiative_points }}" class="mt-1 p-3 block w-full bg-white border border-gray-300 rounded-md shadow-md">
                    @error('initiative_points')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <button type="submit" class="bg-sky-600 hover:bg-sky-800 text-white px-4 py-2 rounded">Modifier la tâche</button>
        </form>
    </div>
    
</div>
@endsection