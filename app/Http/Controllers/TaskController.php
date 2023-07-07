<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexTaskRequest;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexTaskRequest $request)
    {
        $query = Task::query();
        $query->latest();
        if ($status = $request->validated('status')) {
            $query->where('status', $status);
        }
        return view('tasks.index', ['tasks' => $query->paginate()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $task = Task::create($request->validated());
        return \redirect()->route('tasks.show', ['task' => $task]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return \redirect(request('back', route('tasks.index')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return \redirect(request('back', route('tasks.index')));
    }
}
