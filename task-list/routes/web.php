<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Task;


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
Route::post('/tasks', function (Request $request) {
    // ✅ 驗證
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required',
    ]);

    // ✅ 儲存
    Task::create($data);

    // ✅ 成功訊息存入 session
    return redirect()->route('tasks.create')
        ->with('success', '任務新增成功！');
})->name('tasks.store');


Route::get('/tasks/{id}', function ($id) { // 任務詳情頁（點進去看細節）
    return view('show', ['task' => Task::findOrFail($id)]);
})->name('tasks.show');


