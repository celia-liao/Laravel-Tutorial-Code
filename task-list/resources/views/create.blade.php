@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
<style>
  .error-msg { color: red; font-size: 0.8rem; }
  .success-msg { color: green; font-weight: bold; margin-bottom: 10px; }
</style>
@endsection

@section('content')

  {{-- ✅ 成功訊息 --}}
  @if (session('success'))
    <div class="success-msg">{{ session('success') }}</div>
  @endif

  <form method="POST" action="{{ route('tasks.store') }}">
    @csrf

    <div>
      <label for="title">Title</label>
      <input type="text" name="title" id="title" value="{{ old('title') }}" />
      @error('title') <p class="error-msg">{{ $message }}</p> @enderror
    </div>

    <div>
      <label for="description">Description</label>
      <textarea name="description" id="description" rows="5">{{ old('description') }}</textarea>
      @error('description') <p class="error-msg">{{ $message }}</p> @enderror
    </div>

    <div>
      <label for="long_description">Long Description</label>
      <textarea name="long_description" id="long_description" rows="10">{{ old('long_description') }}</textarea>
      @error('long_description') <p class="error-msg">{{ $message }}</p> @enderror
    </div>

    <div>
      <button type="submit">Add Task</button>
    </div>
  </form>
@endsection
