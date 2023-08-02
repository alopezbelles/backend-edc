<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetTasksController;
use App\Http\Controllers\CreateTaskController;


//Get all tasks from database

Route::get('/alltasks', [GetTasksController::class, 'index']);

//Create new task

Route::post('/createtask', [CreateTaskController::class, 'create'])->withoutMiddleware(['csrf']);
