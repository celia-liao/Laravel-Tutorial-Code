<?php

namespace App\Http\Controllers;
use  App\Http\Requests\TaskRequest;
use  App\Models\Task;

abstract class Controller
{
    public function store(TaskRequest $request)
    {
        Task::create($request->validated());
    }
}
