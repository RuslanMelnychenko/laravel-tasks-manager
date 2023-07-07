<form action="{!! route('tasks.update', ['task' => $task, 'back' => request('back')]) !!}" method="post">
  @method('PUT')
  <x-forms.input
    type="text"
    required
    value="{{ old('title', $task->title) }}"
    class="my-2"
    name="title"
    placeholder="{!! __('tasks.input.title') !!}"
  />
  <x-forms.textarea
    value="{{ old('description', $task->description) }}"
    class="my-2"
    name="description"
    placeholder="{!! __('tasks.input.description') !!}"
  />
  <x-forms.input
    type="date"
    class="my-2"
    name="deadline_at"
    value="{{ old('deadline_at', $task->deadline_at?->format('Y-m-d') ?? '') }}"
    title="{!! __('tasks.input.deadline_at') !!}"
  />
  @csrf
  @error('title', 'description', 'deadline_at')
  <x-forms.input-error :message="$message"/>
  @enderror
  <x-forms.select
    name="status"
    title="{!! __('tasks.input.status') !!}"
  >
    @foreach(\App\Enums\TaskStatus::cases() as $status)
      <option
        value="{{ $status->value }}"
        @selected(old('version', $task->status) === $status)
      >{{ $status->icon() }} {{ $status->title() }}</option>
    @endforeach
  </x-forms.select>
  <div class="text-center">
    <x-forms.submit value="{!! __('tasks.edit.submit') !!}" class="my-2"/>
  </div>
</form>
