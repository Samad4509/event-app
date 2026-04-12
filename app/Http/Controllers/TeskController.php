<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Task;
use Spatie\Permission\Models\Permission;

class TeskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
           // examples:
        $this->middleware(['permission:task-list|task-create|task-edit|task-delete'],['only'=>["index","show"]]);
        $this->middleware(['permission:task-edit'],['only'=>["edit","update"]]);
        $this->middleware(['permission:task-create'],['only'=>["create","store"]]);
        $this->middleware(['permission:task-delete'],['only'=>["destroy"]]);
     
   }
    public function index()
    {
        $tasks = Task::all();
        return view('task.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        // return $task;
        return view('task.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'ProductCode' => 'required|unique:tasks,ProductCode',  // Ensure 'tasks' is your table name
        ]);
        Task::create([
            'taskName'=>$request->taskName,
            'productName'=>$request->productName,
            'ProductCode'=>$request->ProductCode,
            'Status'=>$request->status,
        ]);
        return redirect()->route("task.index")->with('success','Task Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tasks = Task::find($id);
        $products = Product::find($id);
        return view("task.edit",compact("tasks","products"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;
        $request->validate([
            'name'=>'taskName',
        ]);
        
        $task = Task::find($id);
        $task->taskName = $request->taskName;
        $task->ProductCode = $request->ProductCode;
        $task->Status = $request->status;
        $task->save();
        return redirect()->route("task.index")->with('success','task Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route("task.index")->with('success','Task Deleted');
    }
}
