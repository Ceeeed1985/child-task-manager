<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('dashboard.tasks.index');
    }

    public function create(){
        return view('dashboard.tasks.create');
    }
}
