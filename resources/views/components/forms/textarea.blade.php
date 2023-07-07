@props([
    'value' => ''
])
<x-forms.input tag="textarea" {{ $attributes->except(['value']) }}/>{{ $value }}</textarea>
