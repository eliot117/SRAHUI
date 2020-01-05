<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
    }

    public function show($id)
    {
        $permissions = Permission::findOrFail($id);
        return view('permissions.show', compact('permissions'));
    }
}
