@extends('layouts.user-header-and-footer')
@section('html_title', 'User home')
@push('body')
    <x-container>

        <h1 class="mb-4 font-bold text-lg">{{ auth()->user()->full_name }}</h1>

        {{-- Display groups --}}
        <h2 class="mb-1 font-semibold">Groups</h2>

        <div>
            @foreach ($groups as $group)

                <div class="mb-1">
                    <a href="{{ route('group.show', compact('group')) }}"
                        class="underline"
                        >{{ $group->name }}</a>
                </div>

            @endforeach
        </div>

    </x-container>
@endpush
