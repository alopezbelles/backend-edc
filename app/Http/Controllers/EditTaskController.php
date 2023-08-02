<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class EditTaskController extends Controller
{
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'status' => 'required|in:completed,not completed',
        ]);

        $task = Task::findOrFail($id);
        $task->status = $data['status'];
        $task->save();

        return response()->json($task, 200);
    }
}
