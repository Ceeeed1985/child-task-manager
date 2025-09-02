<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;

class MemberController extends Controller
{
    public function index(){
        $members = Member::all();
        return view('dashboard.members.index', compact('members'));
    }

    public function create(){
        return view('dashboard.members.create');
    }

    public function store(MemberRequest $request){
        $validatedData = $request->validated();

        if ($request->hasFile('avatar')) {
            $avatarName = time().'.'.$request->file('avatar')->extension();
            $path = $request->file('avatar')->storeAs('avatars', $avatarName, 'public');
            $validatedData['avatar'] = "storage/".$path;
        } else {
            $validatedData['avatar'] = null;
        }

        $validatedData['user_id'] = auth()->id();

        Member::create($validatedData);
        return redirect()->route('dashboard')->with('success', "Le nouveau membre de la famille a été ajouté avec succès !");
        
    }
}
