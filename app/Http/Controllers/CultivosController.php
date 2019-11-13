<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CultivosController extends Controller
{
    public function index()
    {
        return View('layouts.cultivos');
    }

    public function create()
    {
        return View('layouts.cultivos');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_scientific' => 'required|max:255',
            'name'            => 'required|max:255',
            'description'     => 'required|max:255',
        ]);
        \App\Form::create($validatedData);

        return response()->json('Datos Guardados');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
