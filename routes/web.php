<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TodolistFormController;

Route::get('/', [TodolistFormController::class, 'index']);
