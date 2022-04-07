@props(['name', 'type'])

<x-form.field>
    <x-form.label name="{{$name}}" />
    <input class="form-input" name="{{ $name }}" id="{{ $name }}" type="{{ $type ?? 'text' }}"
        {{ $attributes(['value'=>old($name)]) }} />

    <x-form.error name="{{$name}}" />
</x-form.field>
