@extends('layouts.app')
@section('title', __('tasks.title.edit'))

@section('content')
  <div class="mx-auto max-w-md mb-24">
    <h2 class="text-center text-xl mb-2">{!! __('tasks.title.edit') !!}</h2>
    <x-tasks.edit-form :task="$task"/>
  </div>
@endsection
