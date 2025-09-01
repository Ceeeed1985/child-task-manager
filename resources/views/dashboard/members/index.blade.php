@extends('layout.app')

@section('title', "Ma famille")

@section('content')

<div class="pt-6 px-12">
    <h1 class="text-sky-600 text-3xl font-bold mb-12">Membres de la famille</h1>
    <div class="flex gap-8">
        <div class="card w-1/5 rounded-3xl py-12 border border-4 border-neutral-800 hover:border-sky-600 bg-neutral-800 ">
            <a href="#" class="flex flex-col items-center px-4 mx-2">
                <img class="object-cover mx-2 rounded-full h-48 w-48 mb-12 " src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar" />
                <span class="mx-2 font-medium text-neutral-300 text-lg">{{ Auth::user()->name }}</span>
            </a>
        </div>

        <div class="card w-1/5 rounded-3xl py-12 border border-4 border-neutral-800 hover:border-sky-600 bg-neutral-800 opacity-[60%] hover:opacity-100">
            <a href="{{ route('members.create') }}" class="flex flex-col items-center px-4 mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-48 text-sky-600 mb-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>

                <span class="mx-2 font-medium text-neutral-300 text-lg">Ajouter un enfant</span>
            </a>
        </div>

        
    </div>
    
</div>

@endsection