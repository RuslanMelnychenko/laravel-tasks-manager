@php
  $statuses = [
      '',
      'process',
      'not_started',
      'done',
    ];
@endphp
<div class="flex justify-around">
  @foreach($statuses as $status)
    <a
      @class([
        'px-3 py-1 border-2 rounded-lg',
        "task-bg--{$status}",
        "font-medium" => request()->query('status') == $status,
      ])
      href="{{ route('tasks.index', $status? ['status' => $status]: []) }}"
    >{{ __("tasks.status.{$status}") }}</a>
  @endforeach
</div>
