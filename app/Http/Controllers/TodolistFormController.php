<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TodolistFormController extends Controller
{
    // タスクを一覧表示
    public function index(): View
    {
        $todos = Todo::orderBy('id')->get();
        return view('todolist', ['todos' => $todos]);
    }

    public function createPage(): View
    {
        return view('todo_create');
    }

    public function create(Request $request)
    {
        $todo = new Todo();
        $todo->task_name = $request->task_name;
        $todo->task_description = $request->task_description;
        $todo->save();
        $todos = Todo::orderBy('id')->get();
        return view('todolist', ['todos' => $todos]);
    }
}
