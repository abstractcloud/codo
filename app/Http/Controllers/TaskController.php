<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Http\Requests\TasksRequest;
use DB;

class TaskController extends Controller
{
    
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function create()
    {
        return response()->json('status' => 'create successful');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Task::create($data);
        
        return response()->json($data);
    }

    public function show($id)
    {
        $oneTask = Task::find($id);

        return response()->json($oneTask);
    }

    public function edit($id)
    {
        $EditTask = Task::find($id);
        
        return response()->json($EditTask);
    }

    public function update(Request $request, $id)
    {
        data = $request->all();
        
        Task::find($id)->update($data);
        return response()->json('status' => 'update successful');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return response()->json('delete' => 'successful');
    }
}
