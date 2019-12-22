<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        Role::create([
            "name"       => $request->input('name'),
            "guard_name" => $request->input('guard_name','web'),
        ]);
        return redirect()->route('roles.index');
    }

    public function show($id)
    {
        $roles = Role::findOrFail($id);
        return view('roles.show', compact('roles'));
    }

    public function edit($id)
    {
        $roles = Role::findOrFail($id);
        return view('roles.edit', compact('roles'));
    }

    public function update(Request $request, $id)
    {
        $roles = Role::findOrFail($id);
        $roles->update([
            "name"      => $request->input('name'),
        ]);
        
        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return redirect()->route('roles.index');
    }
}