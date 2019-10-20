<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotasController extends Controller
{
   
    public function index()
    {
        $notas = Nota::all();
        return view('notas.index', compact('notas'));
    }

    public function create()
    {
        //
    }

    public function eliminar($id)
    {
        if(auth()->user()->can('eliminar-notas'))
        {
            Nota::findOrFail($id)->delete();
            return redirect()->back();
        }
        abort(403);
    }
}
