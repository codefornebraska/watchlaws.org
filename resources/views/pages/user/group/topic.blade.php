@php

    $root = $group->parent->parent;
    $workspace = $group->parent;
    $topic = $group;

@endphp
@extends('layouts.user-header-and-footer')
{{-- @section('html_title', $topic->name.' | '.$workspace->name.' | '.$session->short_description.' | '.$state->name.' | '.$root->name) --}}
@push('body')
    <x-container>

        {{-- Navigation --}}
        <ul class="mb-5">
            <li><a href="{{ route('group.show', $root) }}" class="underline">{{ $root->name }}</a></li>
            <li><a href="{{ route('group.show', $workspace) }}" class="underline">{{ $workspace->name }}</a></li>
            <li>{{ $topic->name }}</li>
        </ul>

        <h1 class="mb-4 font-bold text-lg">{{ $topic->name }}</h1>

        {{-- State --}}
        <h2 class="mb-1 font-semibold">State</h2>
        <div>
            @if ($topic->default_state)
                <a href="{{ route('group.state.show', [$topic, $topic->default_state->abbreviation]) }}" class="underline"
                    >{{ $topic->default_state->name }}</a>
                (<a href="{{ route('group.state.index', $topic) }}" class="underline">change</a>)
            @else
                <a href="{{ route('group.state.index', $topic) }}" class="underline">Pick a state</a>
            @endif
        </div>



    </x-container>
@endpush
