<?php

namespace App\Http\Controllers;

use DB;
use App\Crop;
use Illuminate\Http\Request;

class CropsController extends Controller
{
    public function index()
    {
        if(auth()->user()->can('ver-cultivo'))
        {
           $crops = Crop::all();
           return view('crops.index', compact('crops'));
        }
        abort(403);
    }

    public function create()
    {
        if(auth()->user()->can('crear-cultivo'))
        {
            return view('crops.create');
        }
        abort(403);
    }

    public function store(Request $request)
    {
        Crop::create($request->all());
        return redirect()->route('crops.index');
    }

    public function show($id)
    {
        if(auth()->user()->can('ver-cultivo'))
        {
            $crops = Crop::findOrFail($id);
            return view('crops.show', compact('crops'));
        }
        abort(403);
    }

    public function edit($id)
    {
        if(auth()->user()->can('editar-cultivo'))
        {
           $crops = Crop::findOrFail($id);
           return view('crops.edit', compact('crops'));
        }
        abort(403);
    }

    public function update(Request $request, $id)
    {
        Crop::findOrFail($id)->update($request->all());
        return redirect()->route('crops.index');
    }

    public function destroy($id)
    {
        if(auth()->user()->can('eliminar-cultivo'))
        {
          Crop::findOrFail($id)->delete();
          return redirect()->route('crops.index');
        }
        abort(403);
    }
}
