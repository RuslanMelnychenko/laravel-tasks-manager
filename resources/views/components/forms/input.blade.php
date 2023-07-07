@props([
    'tag' => 'input',
])
<{{ $tag }} {{ $attributes->merge(['type' => 'text', 'class' => 'focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none w-full text-sm leading-6 text-slate-900 placeholder-slate-400 rounded-md py-2 px-4 ring-1 ring-slate-200 shadow-sm']) }} {{}}>
