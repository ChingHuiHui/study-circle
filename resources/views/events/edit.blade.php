@extends('layouts.app')

@section('content')
<div class="container mt-20">
  <div class="max-w-[1000px] mx-auto">
    <x-title title="編輯讀書會" />
    <div class="mb-4 text-xl">
      讀書會編號：{{ $event->id }}
    </div>
    <form action="/events/{{ $event->id }}" method="POST">
      @csrf
      @method('PATCH')

      <x-form.input name=" title" value="{{ old('title', $event->title) }}" />
      <x-form.textarea name="body">
        {!! old('body', $event->body) !!}
      </x-form.textarea>
      <x-form.textarea name="note">
        {!! old('note', $event->note) !!}
      </x-form.textarea>
      <x-form.field>
        <x-form.label name="department" />
        <select class="form-input" name="department" id="department" required>
          @foreach (\App\Models\Department::all() as $department)
          <option value="{{ $department->id }}" {{ old('department', $event->department_id) == $department->id ?
            'selected' : '' }}>
            {{ $department->name }}
          </option>
          @endforeach
        </select>
        <x-form.error name="department" />
      </x-form.field>

      {{--
      <x-form.input name="date" type="datetime-local" value="{{substr(Carbon\Carbon::now()->toISOString(),0, 16)}}" />
      --}}
      <div class="flex justify-center">
        <button type="submit" class="btn btn-primary w-60">
          送出
        </button>
      </div>
    </form>
  </div>
</div>
@endsection