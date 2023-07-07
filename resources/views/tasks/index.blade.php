@extends('layouts.app')
@section('title', __('tasks.title.index'))

@section('content')
  <div class="mx-auto max-w-md mb-24">
    @auth()
      <x-tasks.create-form/>
    @endauth
    <x-tasks.status-filter/>
    @foreach($tasks as $task)
      <x-tasks.item :task="$task" class="my-2"/>
    @endforeach
    {!! $tasks->links() !!}
  </div>
@endsection
