@extends('layouts.app')

@section('content')
    <div>
        <p class="d-none" id="title">{{ $title }}</p>
        <h1 class="h2">Overview</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    Share
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    Export
                </button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
        <div x-data="{ open: false }">
            <button x-on:click="open = ! open">Toggle Dropdown</button>

            <div x-show="open" x-transition>
                Dropdown Contents...
            </div>
        </div>
    </div>
@endsection
