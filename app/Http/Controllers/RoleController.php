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

    public function show($id)
    {
        $roles = Role::findOrFail($id);
        return view('roles.show', compact('roles'));
    }
}