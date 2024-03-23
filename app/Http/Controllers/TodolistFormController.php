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
        return redirect('/');
    }

    public function editPage($id): View
    {
        $todo = Todo::find($id);
        return view('todo_edit', ['todo' => $todo]);
    }

    public function edit(Request $request)
    {
        Todo::find($request->id)->update([
            'task_name' => $request->task_name,
            'task_description' => $request->task_description
        ]);
        return redirect('/');
    }

    public function deletePage($id): View
    {
        $todo = Todo::find($id);
        return view('todo_delete', ['todo' => $todo]);
    }

    public function delete($id)
    {
        Todo::find($id)->delete();
        return redirect('/');
    }
}
