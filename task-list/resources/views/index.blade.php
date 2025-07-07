@forelse ($tasks as $task)
  <div>
    <h2>{{ $task->title }}</h2>
    <p>{{ $task->description }}</p>
  </div>
@empty
  <p>No tasks available.</p>
@endforelse