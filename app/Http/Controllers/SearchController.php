<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $tasks = Task::where('taskName', 'like', '%' . $request->search . '%')
                ->orWhere('ProductName', 'like', '%' . $request->search . '%')
                ->orWhere('ProductCode', 'like', '%' . $request->search . '%')
                ->orWhere('Status', 'like', '%' . $request->search . '%')
                ->orderBy('id', 'desc')
                ->get();

    if ($tasks->count() > 0) {
        return response()->json([
            'status' => 'success',
            'tasks' => view('task._task_rows', compact('tasks'))->render(),
        ]);
    } else {
        return response()->json([
            'status' => 'nothing_found',
        ]);
    }
}

}
