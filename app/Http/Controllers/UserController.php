<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        if($request->hasFile('image_profile')){
            $file = $request->file('image_profile');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/profile/',$name);
        }

        $users = new User();
        $users->name          = $request->input('name');
        $users->email         = $request->input('email');
        $users->password      = Hash::make($request->input('password'));
        $users->image_profile = $name;
        $users->save();

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $users = User::findOrFail($id);
        return view('users.show', compact('users'));
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->update([
            "name"      => $request->input('name'),
            "email"     => $request->input('email'),
            "password"  => Hash::make($request['password'])
        ]);
        
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index');
    }
}
