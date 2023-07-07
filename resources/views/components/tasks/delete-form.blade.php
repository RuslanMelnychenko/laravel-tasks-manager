@props([
    'task'
])
<form
  {{ $attributes }}
  action="{!! route('tasks.destroy', ['task' => $task, 'back' => request('back')]) !!}"
  method="post"
  onsubmit="return confirm('{{ __('tasks.delete.confirm') }}')"
>
  @method('DELETE')
  <input
    type="submit"
    class="text-red-600 font-medium hover:underline"
    value="{{ __('tasks.delete.btn') }}"
  />
  @csrf
</form>
