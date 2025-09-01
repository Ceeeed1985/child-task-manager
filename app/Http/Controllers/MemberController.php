<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        return view('dashboard.members.index');
    }

    public function create(){
        return view('dashboard.members.create');
    }
}
