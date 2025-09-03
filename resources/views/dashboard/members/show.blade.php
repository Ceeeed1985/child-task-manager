@extends('layout.app')

@section('title', '{{ $member->firstname }}')

@section('content')

<div class="pt-6 px-12">
    <div class="flex gap-8">
        <div class="card w-full rounded-3xl py-6 border border-2 border-neutral-800 ">
            <a href="#" class="flex items-center px-4 mx-2">
                <img class="object-cover mx-2 rounded-full h-24 w-24 border border-4 border-sky-600" src="{{ asset($member->avatar) }}" alt="avatar" />
                <span class="mx-2 font-medium text-neutral-300 text-lg pl-12">{{ $member->firstname }}</span>
                <span class="mx-2 font-medium text-neutral-300 text-lg pl-12">{{ $member->lastname }}</span>
                <form action="" method="post"></form>
            </a>
        </div>
    </div>
    
</div>

@endsection