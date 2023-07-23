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
}