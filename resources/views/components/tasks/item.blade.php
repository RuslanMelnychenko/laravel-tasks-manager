@php
  $isLate = $task->status !== \App\Enums\TaskStatus::DONE && $task->deadline_at?->isBefore(now());
@endphp
<a
  {{ $attributes->class([
      "block border-2 rounded-lg py-1 px-2",
      "task-bg--{$task->status?->value}",
      'border-red-400' => $isLate
    ]) }}
  title="{!! $task->status->title() !!}"
  href="{{ route('tasks.show', ['task' => $task, 'back' => request()->getRequestUri()]) }}"
>
  <span class="float-right text-lg inline-block -mt-1 -mr-1">{!! $task->status?->icon() !!}</span>
  <h3 class="font-medium">{{ $task->title }}</h3>
  @if($task->description)
    <p class="whitespace-pre-line">{{ $task->description }}</p>
  @endif
  @if($task->deadline_at)
    <p @class([ 'text-red-600 font-medium' => $isLate ])>⏰ @date($task->deadline_at)</p>
  @endif
</a>
