<?php

use Illuminate\Support\Facades\Route;

//Get all tasks from database

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index']);
