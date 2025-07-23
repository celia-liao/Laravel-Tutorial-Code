<form method="POST" action="{{ route('tasks.update', ['id' => $task->id]) }}">
  @csrf
  @method('PUT')

  <input type="text" name="title" value="{{ old('title', $task->title) }}" />
  @error('title') <p class="error-msg">{{ $message }}</p> @enderror

  <textarea name="description">{{ old('description', $task->description) }}</textarea>
  @error('description') <p class="error-msg">{{ $message }}</p> @enderror

  <textarea name="long_description">{{ old('long_description', $task->long_description) }}</textarea>
  @error('long_description') <p class="error-msg">{{ $message }}</p> @enderror

  <button type="submit">Edit Task</button>
</form>
