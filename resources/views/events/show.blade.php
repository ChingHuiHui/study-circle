@extends('layouts.app')

@section('content')
    <div class="container mt-20">
        <div class="flex flex-col p-4 bg-primary rounded-xl">
            <h3 class="text-3xl font-bold mb-2">{{ $event->title }}</h3>
            <span class="mb-4">部門：{{ $event->department->name }}</span>
            <span class="text-sm text-white">{{ date('Y-m-d', strtotime($event->date)) }}</span>
        </div>
    </div>
@endsection
