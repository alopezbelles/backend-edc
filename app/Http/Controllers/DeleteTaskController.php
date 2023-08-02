<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class DeleteTaskController extends Controller
{
    public function destroy($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        $task->delete();

        return response()->json(['message' => 'Task deleted successfully'], 200);
    }
}
