<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        $categories = Category::all();
        return view('dashboard.tasks.index', compact('tasks', 'categories'));
    }

    public function create(){
        $categories = Category::all();

        return view('dashboard.tasks.create', compact('categories'));
    }

    public function store(TaskRequest $request){
        
        $validatedData = $request->validated();
        $validatedData['user_id'] = auth()->id();

        Task::create($validatedData);

        return redirect()->route('tasks.index')->with('success', "La nouvelle tâche a été créée avec succès");
    }
}
