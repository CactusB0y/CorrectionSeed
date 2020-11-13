<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        $data = Membre::all();
        return view('welcome', compact('data'));
    }
    
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $newEntry = new Membre();
        $newEntry->nom = $request->nom;
        $newEntry->age = $request->age;
        $newEntry->email = $request->email;
        $newEntry->telephone = $request->telephone;
        $newEntry->save();
        return redirect()->back();
    }

    public function show($id){
        $show = Membre::find($id);
        return view('show', compact('show'));
    }

    public function edit($id){
        $edit = Membre::find($id);
        return view('edit', compact('edit'));
    }

    public function update($id, Request $request){
        $user = Membre::find($id);
        $user->nom = $request->nom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->save();
        return redirect('/membre-show/'.$user->id);
    }

    public function destroy($id){
        $destroy = Membre::find($id);
        $destroy->delete();
        return redirect("/");
    }

    public function deleteAll(){
        Membre::truncate();
        return redirect('/');
    }
}
