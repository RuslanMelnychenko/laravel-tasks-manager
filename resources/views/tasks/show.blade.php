@extends('layouts.app')
@section('title', __('tasks.title.show', $task->only(['id'])))

@section('content')
  <div class="mx-auto max-w-lg mb-24">
    <h2 class="text-2xl font-medium" title="{{ __('tasks.input.title') }}">{{ $task->title }}</h2>
    <p class="text-lg my-2">{{ __('tasks.input.status') }}: {{ $task->status->icon() }}
      <span @class(['task-text--'.$task->status?->value])>{{ $task->status->title() }}</span></p>
    @if($task->description)
      <div class="whitespace-pre-line my-2 text-lg"
           title="{{ __('tasks.input.description') }}">{{ $task->description }}</div>
    @endif
    @if($task->deadline_at)
      <p class="my-2">{{ __('tasks.input.deadline_at') }}: @date($task->deadline_at)</p>
    @endif
    @auth()
      <div class="flex justify-between mt-6 text-sm">
        <a class="text-orange-400 font-medium hover:underline"
           href="{{ route('tasks.edit', ['task' => $task, 'back' => request('back')]) }}">{{ __('tasks.edit.btn') }}</a>
        <x-tasks.delete-form :task="$task"/>
      </div>
    @endauth
  </div>
@endsection
