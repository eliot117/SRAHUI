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

    public function crear()
    {
        return view('notas.crear');
    }

    public function eliminar($id)
    {
        Nota::findOrFail($id)->delete();
        return redirect()->back();
    }
}
