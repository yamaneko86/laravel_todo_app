<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistFormController;

Route::get('/', [TodolistFormController::class, 'index']);
