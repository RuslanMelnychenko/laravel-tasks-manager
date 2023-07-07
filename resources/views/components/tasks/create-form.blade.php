<form action="{!! route('tasks.store') !!}" method="post">
  <x-forms.input
    type="text"
    required
    value="{{ old('title') }}"
    class="my-2"
    name="title"
    placeholder="{!! __('tasks.input.title') !!}"
  />
  <x-forms.textarea
    value="{{ old('description') }}"
    class="my-2"
    name="description"
    placeholder="{!! __('tasks.input.description') !!}"
  />
  <x-forms.input
    type="date"
    min="{!! date('Y-m-d') !!}"
    class="my-2"
    name="deadline_at"
    title="{!! __('tasks.input.deadline_at') !!}"
  />
  @csrf
  @error('title', 'description', 'deadline_at')
  <x-forms.input-error :message="$message"/>
  @enderror
  <div class="text-center">
    <x-forms.submit value="{!! __('tasks.create.submit') !!}" class="my-2"/>
  </div>
</form>
