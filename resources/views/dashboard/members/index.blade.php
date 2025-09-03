@extends('layout.app')

@section('title', "Ma famille")

@section('content')

<div class="pt-6 px-12">
    @if (session('success'))
        <div class="bg-green-100 text-green-500 p-3">
            <p class="font-bold">C'est fait !</p>
            <p>{{session('success')}}</p>
        </div>
    @endif

    <div class="flex gap-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-sky-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
        </svg>
        <h1 class="text-white text-3xl font-bold mb-12">Membres de la famille</h1>
    </div>
    <div class="flex gap-8">
        <div class="card w-1/5 rounded-3xl py-12 border border-4 border-neutral-800 hover:border-sky-600 bg-neutral-800 ">
            <a href="#" class="flex flex-col items-center px-4 mx-2">
                <img class="object-cover mx-2 rounded-full h-48 w-48 mb-12 border border-8 border-sky-600 p-2" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar" />
                <span class="mx-2 font-medium text-neutral-300 text-lg">{{ Auth::user()->name }}</span>
            </a>
        </div>

        @foreach ($members as $member)
            <div class="card w-1/5 rounded-3xl py-12 border border-4 border-neutral-800 hover:border-sky-600 bg-neutral-800 ">
                <a href="{{ route('members.show', $member->id) }}" class="flex flex-col items-center px-4 mx-2">
                    <img class="object-cover mx-2 rounded-full h-48 w-48 mb-12 " src="{{ asset($member->avatar) }}" alt="avatar" />
                    <span class="mx-2 font-medium text-neutral-300 text-lg">{{ $member->firstname }}</span>
                </a>
            </div>
        @endforeach

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