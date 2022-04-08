@extends('layouts.app')

@section('content')
<div class="container mt-20">
    <div class="max-w-[1000px] mx-auto">
        <x-title title="{{$event->title}}" />
        <div class="mb-4 text-xl">
            讀書會編號：{{ $event->id }}
        </div>
        <x-form.field>
            <span class="form-label">Body</span>
            <p class="form-input">{!! nl2br(old('body', $event->body)) !!}</p>
        </x-form.field>
        <x-form.field>
            <span class="form-label">Note</span>
            <p class="form-input">{!! nl2br(old('note', $event->note)) !!}</p>
        </x-form.field>
        <x-form.field>
            <span class="form-label">Department</span>
            <p class="form-input">{{old('department', $event->department->name)}}</p>
        </x-form.field>
        <x-form.field>
            <span class="form-label">Date</span>
            <p class="form-input">{{old('date', $event->date)}}</p>
        </x-form.field>
        <div class="grid grid-cols-2 gap-4">
            <form method="POST" action="/events/{{ $event->id }}">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger w-full" type="submit">刪除</button>
            </form>
            <a href="/events/{{ $event->id }}/edit" class="btn btn-primary block">編輯</a>
        </div>
    </div>
</div>
@endsection