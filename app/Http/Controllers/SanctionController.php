<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sanction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SanctionRequest;

class SanctionController extends Controller
{
    public function index(){
        $sanctions = Sanction::where('user_id', Auth::id())->get();
        $categories = Category::all();
        return view('dashboard.sanctions.index', compact('sanctions', 'categories'));
    }

    public function create(){
        $categories = Category::all();
        return view('dashboard.sanctions.create', compact('categories'));
    }

    public function store(SanctionRequest $request){
        $validatedData = $request->validated();
        $validatedData['user_id'] = auth()->id();

        Sanction::create($validatedData);

        return redirect()->route('sanctions.index')->with('success', "Une nouvelle sanction a été ajoutée à votre liste avec succès !");

    }

    public function edit($id){
        $sanction = Sanction::where('user_id', Auth::id())->findOrFail($id);
        $categories = Category::all();

        return view('dashboard.sanctions.edit', compact('sanction', 'categories'));
    }

    public function update(SanctionRequest $request, $id){
        $validatedData = $request->validated();
        $sanction = Sanction::where('user_id', Auth::id())->findOrFail($id);

        $sanction->update($validatedData);

        return redirect()->route('sanctions.index')->with('success', "La sanction a été modifiée avec succès !");
    }


    public function delete($id){
        $sanction = Sanction::where('user_id', Auth::id())->findOrFail($id);

        $sanction->delete();
        return redirect()->route('sanctions.index')->with('success', "La sanction a été supprimée de votre liste avec succès !");
    }

}
