@extends('layout.app')

@section('title', "Les tâches")

@section('content')

<div class="pt-6 px-12">

    @if (session('success'))
        <div id="success-message" class="bg-green-100 text-green-500 p-3 rounded-lg flex justify-between items-center mb-6">
            <div>
                <p class="font-bold">C'est fait !</p>
                <p>{{ session('success') }}</p>
            </div>
            <button id="close-button" class="text-green-500 hover:text-green-700 font-bold text-xl cursor-pointer ml-4">&times;</button>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const closeButton = document.getElementById('close-button');
                const successMessage = document.getElementById('success-message');

                if (closeButton && successMessage) {
                    closeButton.addEventListener('click', function () {
                        successMessage.style.display = 'none';
                    });
                }
            });
        </script>
    @endif

    
    <div class="flex gap-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-sky-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
        </svg>
        <h1 class="text-white text-3xl font-bold mb-6">Gestion des tâches</h1>
    </div>

    <div class="flex justify-end">
        <a href="{{ route('tasks.create') }}" class="text-white bg-sky-600 content-center justify-self-end font-semibold px-4 py-1 mb-6 rounded-lg hover:bg-sky-800">Créer une nouvelle tâche</a>
    </div>

        <div class="flex gap-8 mb-12">
            <div class="w-full flex flex-col py-4 px-8 rounded-3xl border border-2 border-neutral-800">
                    
                    @foreach ($categories as $category)
                    
                    <h4 class="text-white text-2xl mt-4">{{ $category->name }}</h4>
                        @foreach ($tasks as $task)
                            @if ($category->id == $task->category_id)
                                <div class="flex justify-between my-1">
                                    <span class="text-white text-lg w-1/2 pl-4">{{ $task->name }}</span>
                                    <span class="text-white text-lg text-center w-1/8">{{ $task->points }}
                                        @if ($task->points == 1)
                                            point
                                        @else 
                                            points
                                        @endif</span>
                                    <span class="text-white text-lg text-center w-1/8">{{ $task->initiative_points }}
                                    @if ($task->initiative_points == 0)
                                            pas d'application
                                        @else
                                            points
                                        @endif
                                    </span>
                                    
                                    <div class="flex gap-4">
                                        <a href="" class="text-white bg-sky-600 content-center justify-self-end font-semibold px-4 rounded hover:bg-sky-800">Modifier</a>
                                        <form action="" method="post" class="text-white bg-red-700 font-semibold rounded content-center hover:bg-red-900 px-4">
                                        @csrf
                                        @method('delete')
                                            <button type="submit">Supprimer</button>
                                        </form>
                                     </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                
                {{-- <a href="#" class="text-white bg-red-700 font-semibold rounded hover:bg-red-900 px-4 items-end">Créer une nouvelle tâche</a>
                <div class="w-full flex justify-between rounded-3xl">
                    <div class="infos flex gap-4">
                        <span class="mx-2 font-medium text-neutral-300 text-lg"></span>
                        <span class="mx-2 font-medium text-neutral-300 text-lg"></span>
                    </div>
                    <div class="flex gap-4">
                        <a href="" class="text-white bg-sky-600 content-center justify-self-end font-semibold px-4 rounded hover:bg-sky-800">Modifier</a>
                        <form action="" method="post" class="text-white bg-red-700 font-semibold rounded hover:bg-red-900 px-4">
                            @csrf
                            @method('delete')
                            <button type="submit">Supprimer</button>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
        
    </div>
    
</div>

@endsection