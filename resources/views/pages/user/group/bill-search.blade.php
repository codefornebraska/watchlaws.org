@php

    $root = $group->parent->parent;
    $workspace = $group->parent;
    $topic = $group;

@endphp@extends('layouts.user-header-and-footer')
{{-- @section('html_title', '') --}}
@push('body')
    <x-container>

        {{-- Navigation --}}
        <ul class="mb-5">
            <li><a href="{{ route('group.show', $root) }}" class="underline">{{ $root->name }}</a></li>
            <li><a href="{{ route('group.state.show', [$root, $state->abbreviation]) }}" class="underline">{{ $state->name }}</a></li>
            <li><a href="{{ route('group.session.show', [$root, $state->abbreviation, $session]) }}" class="underline">{{ $session->title }}</a></li>
            <li><a href="{{ route('group.session.show', [$workspace, $state->abbreviation, $session]) }}" class="underline">{{ $workspace->name }}</a></li>
            <li>{{ $topic->name }}</li>
        </ul>

        <nav class="pb-1 mb-6 border-b">
            <a href="{{ route('group.session.show', [$topic, $state->abbreviation, $session]) }}" class="underline">bookmarks</a>
            <a href="{{ route('group.bill-search.show', [$topic, $state->abbreviation, $session]) }}" class="font-semibold ml-1">search</a>
        </nav>

        <h2 class=" text-xl font-bold mb-3">Bill search</h2>

        @livewire('bill-table', ['state' => $state, 'session' => $session, 'scope' => $group])

    </x-container>
@endpush
