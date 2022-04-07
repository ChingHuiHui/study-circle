@extends('layouts.app')

@section('content')
    <div class="container mt-20">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-6">
        @foreach ($events as $event)
            <div class="bg-primary rounded-xl">
                <a class="block flex flex-col p-4 " href="/events/{{ $event->id }}">
                    <h3 class="text-3xl font-bold mb-2">{{ $event->title }}</h3>
                    <span class="mb-4">部門：{{ $event->department->name }}</span>
                    <span class="text-sm text-white">{{ date('Y-m-d', strtotime($event->date)) }}</span>
                </a>
            </div>
        @endforeach
        </div>
    </div>
@endsection
