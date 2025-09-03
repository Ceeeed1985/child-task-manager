@extends('layout.app')

@section('title', $member->firstname)

@section('content')

<div class="pt-6 px-12">
    <div class="flex gap-8 mb-12">
        <div>
            <img class="object-cover mx-2 rounded-full h-36 w-36 border border-6 border-sky-600" src="{{ asset($member->avatar) }}" alt="avatar" />
        </div>
        
        <div class="w-full flex flex-col justify-between py-8 px-8 rounded-3xl border border-2 border-neutral-800">
            <h3 class="text-white text-2xl">Informations du <span class="text-sky-600">profil</span></h3>
            <div class="w-full flex justify-between rounded-3xl">
                <div class="infos flex gap-4">
                    <span class="mx-2 font-medium text-neutral-300 text-lg">{{ $member->firstname }}</span>
                    <span class="mx-2 font-medium text-neutral-300 text-lg">{{ $member->lastname }}</span>
                </div>
                <div class="flex gap-4">
                    <a href="" class="text-white bg-sky-600 content-center justify-self-end font-semibold px-4 rounded hover:bg-sky-800">Modifier</a>
                    <form action="" method="post" class="text-white bg-red-700 font-semibold rounded hover:bg-red-900 px-4">
                        @csrf
                        @method('delete')
                        <a href="" class="">Supprimer</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="graphique w-full h-72 flex flex-col justify-between py-8 px-8 rounded-3xl border border-2 border-neutral-800">
        <h3 class="text-white text-2xl">Mes statistiques</h3>
        <div class="w-full flex justify-between rounded-3xl">
        </div>
    </div>
    
</div>

@endsection