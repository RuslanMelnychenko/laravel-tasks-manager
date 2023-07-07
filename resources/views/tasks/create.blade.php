@extends('layouts.app')
@section('title', __('tasks.title.create'))

@section('content')
  <div class="mx-auto max-w-md mb-24">
    <h2 class="text-center text-xl mb-2">{!! __('tasks.title.create') !!}</h2>
    <x-tasks.create-form/>
  </div>
@endsection
