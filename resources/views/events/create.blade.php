@extends('layouts.app')

@section('content')
    <div class="container mt-20">
        <div class="max-w-[1000px] mx-auto">
            <div class="p-4 text-center text-lg font-medium bg-primary rounded-xl mb-10">
                新增讀書會
            </div>
            <form method="POST" action="/events">
                @csrf
                <x-form.input name="title" />
                <x-form.textarea name="body" />
                <x-form.textarea name="note" />
                 <x-form.field>
                    <x-form.label  name="department"/>
                    <select class="form-input" name="department" id="department" required>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="department"/>
                </x-form.field>
                <x-form.input name="date" type="datetime-local"/>
                <div class="flex justify-center">
                    <button type="submit" class="btn btn-primary w-60">
                        送出
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
