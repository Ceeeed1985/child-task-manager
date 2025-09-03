<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index(){
        $members = Member::where('user_id', Auth::id())->get();
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
        return redirect()->route('members.index')->with('success', "Le nouveau membre de la famille a été ajouté avec succès !");
        
    }

    public function show($id):View
    {
        $member = Member::where('user_id', auth()->id())->findOrFail($id);
        return view('dashboard.members.show', compact('member'));
    }

    public function edit($id){
        $member = Member::where('user_id', auth()->id())->findOrFail($id);
        return view('dashboard.members.edit', compact ('member'));
    }

    public function update(MemberRequest $request, $id){
        $validatedData = $request->validated();
        $member = Member::where('user_id', auth()->id())->findOrFail($id);

        if ($request->hasFile('avatar')) {
            if($member->avatar && $member->avatar !== 'storage/avatars.default.png'){
                Storage::disk('public')->delete(str_replace('storage/','',$member->avatar));
            }
            $avatarName = time().'.'.$request->file('avatar')->extension();
            $path = $request->file('avatar')->storeAs('avatars', $avatarName, 'public');
            $validatedData['avatar'] = "storage/".$path;
        } else {
            unset($validatedData['avatar']);
        }

        $member->update($validatedData);
        return redirect()->route('members.index')->with('success', "Les informations du membre ont été mises à jour avec succès !");
        
    }

    public function delete($id){
        $member = Member::where('user_id', auth()->id())->findOrFail($id);
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Le membre a été supprimé avec succès !');
    }

}
