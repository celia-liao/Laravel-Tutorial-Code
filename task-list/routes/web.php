<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;


Route::get('/', function () { // 首頁自動轉向 /tasks
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () { // 任務清單頁
    return view('index', [
        'tasks' => Task::latest()->get()
    ]);
})->name('tasks.index');


// 顯示新增任務表單
Route::get('/tasks/create', function () {
    return view('create');
})->name('tasks.create');

// 處理表單送出
Route::post('/tasks', function (TaskRequest $request) {
    // ✅ 儲存
    Task::create($request->validated());

    // ✅ 成功訊息存入 session
    return redirect()->route('tasks.create')
        ->with('success', '任務新增成功！');
})->name('tasks.store');


Route::get('/tasks/{task}', function (Task $task) {
    return view('show', compact('task'));
})->name('tasks.show');

// 顯示編輯頁面
Route::get('/tasks/{task}/edit', function (Task $task) {
    return view('edit', compact('task'));
})->name('tasks.edit');

// 接收更新資料
Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {
    $task->update($request->validated());

    return redirect()->route('tasks.show', ['task' => $task])
        ->with('success', 'Task updated successfully');
})->name('tasks.update');


