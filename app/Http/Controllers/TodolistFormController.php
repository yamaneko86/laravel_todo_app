<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\View\View;

class TodolistFormController extends Controller
{
    // タスクを一覧表示
    public function index(): View
    {
        $todos = Todo::orderBy('id', 'asc')->get();
        return view('todolist', ["todos" => $todos]);
    }
}
