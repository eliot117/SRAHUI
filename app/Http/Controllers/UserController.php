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
        $users = new User();
        $users->name          = $request->input('name');
        $users->email         = $request->input('email');
        $users->password      = Hash::make($request->input('password'));
        $users->save();

        $users->assignRole('student');

        return redirect()->route('users.index')->with('success','Usuario creado');
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
        
        if($request->hasFile('avatar'))
        {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path('avatar/'), $name);
        }

        $users->name          = $request->input('name');
        $users->email         = $request->input('email');
        $users->password      = Hash::make($request->input('password'));
        $users->firstname     = $request->input('firstname');
        $users->lastname      = $request->input('lastname');
        $users->avatar        = $name;
        $users->save();
            
        return redirect()->route('users.index')->with('success','Usuario Actualizado');  
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')->with('warning','Usuario Eliminado');
    }
}
