<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::where('user_id', Auth::id())->get();
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

    public function edit($id){
        $task = Task::where('user_id', Auth::id())->findOrFail($id);
        $categories = Category::all();
        return view('dashboard.tasks.edit', compact('task', 'categories'));
    }

    public function update(TaskRequest $request, $id){
        $validatedData = $request->validated();
        $task = Task::where('user_id', Auth::id())->findOrFail($id);

        $task->update($validatedData);

        return redirect()->route('tasks.index')->with('success', "La tâche a été modifiée avec succès");
        
    }

    public function delete($id){
        $task = Task::where('user_id', Auth::id())->get()->findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', "La tâche a été supprimée avec succès !");
    }
}
