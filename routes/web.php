<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetTasksController;
use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\EditTaskController;
use App\Http\Controllers\DeleteTaskController;


//Get all tasks from database
Route::get('/alltasks', [GetTasksController::class, 'index'])->withoutMiddleware(['csrf']);

//Create new task
Route::post('/createtask', [CreateTaskController::class, 'create'])->withoutMiddleware(['csrf']);

//Edit task
Route::put('/edittask/{id}', [EditTaskController::class, 'update'])->withoutMiddleware(['csrf']);

//Delete task
Route::delete('/deletetask/{id}', [DeleteTaskController::class, 'destroy'])->withoutMiddleware(['csrf']);


