<?php

use Illuminate\Support\Facades\Route;


class Task {
    public function __construct(
      public int $id,
      public string $title,
      public string $description,
      public ?string $long_description,
      public bool $completed,
      public string $created_at,
      public string $updated_at
    ) {}
  }
  // 模擬多筆任務
  $tasks = [
    new Task(1, '任務A', '簡介...', null, true, '2025-06-01', '2025-06-01'),
    new Task(2, '任務B', '簡介...', null, false, '2025-06-02', '2025-06-02'),
  ];


  Route::get('/', function () use ($tasks) {
    return view('index', [
        'tasks' => $tasks
    ]);
})->name('tasks.index');





