{{-- 引入模板 --}}
@extends('layouts.app')
@section('title', 'The list of the books')
@section('content')
    <div>
        @if (count($tasks))
            @foreach ($tasks as $task)
                <div>
                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
                        {{ $task->title }}
                    </a>
                </div>
            @endforeach
        @else
            <div>There are no tasks</div>
        @endif
    </div>
@endsection