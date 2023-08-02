<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class CreateTaskController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'description' => 'required|string',
        ]);


        $task = Task::create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);

        return response()->json($task, 201);
    }
}
