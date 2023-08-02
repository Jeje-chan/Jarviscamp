<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::getAll();

        return view('tasks.index',['tasks' => $tasks,]);
    }
    public function show($id)
    {
        $task = Task::getById($id);

        if (!$task) {
            return redirect()->route('task.index')->with('error', 'Tugas tidak ada');
        }

        return view('tasks.detail', compact('task'));

    }
}
