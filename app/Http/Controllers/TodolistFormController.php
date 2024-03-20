<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\View\View;

class TodolistFormController extends Controller
{
    // タスクを一覧表示
    public function index(): View
    {
        $todos = Todo::orderBy('id')->get();
        return view('todolist', ['todos' => $todos]);
    }
}
