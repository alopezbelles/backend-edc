<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Task;

class EditTaskController extends Controller
{
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'status' => 'nullable|in:completed,not completed',
            'title' => 'string|max:255',
            'description' => 'string',
        ]);

        $task = Task::findOrFail($id);

        if (isset($data['status'])) {
            $task->status = $data['status'];
        }

        if (isset($data['title'])) {
            $task->title = $data['title'];
        }

        if (isset($data['description'])) {
            $task->description = $data['description'];
        }

        $task->save();

        return response()->json($task, 200);
    }
}
