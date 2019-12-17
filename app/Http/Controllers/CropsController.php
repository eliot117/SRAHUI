<?php

namespace App\Http\Controllers;

use DB;
use App\Crop;
use Illuminate\Http\Request;

class CropsController extends Controller
{
    public function index()
    {
        $crops = Crop::all();
        return view('crops.index', compact('crops'));
    }

    public function create()
    {
        return view('crops.create');
    }

    public function store(Request $request)
    {
        Crop::create($request->all());
        return redirect()->route('crops.index');
    }

    public function show($id)
    {
        $crops = Crop::findOrFail($id);
        return view('crops.show', compact('crop'));
    }

    public function edit($id)
    {
        $crops = Crop::findOrFail($id);
        return view('crops.edit', compact('crop'));
    }

    public function update(Request $request, $id)
    {
        Crop::findOrFail($id)->update($request->all());
        return redirect()->route('crops.index');
    }

    public function destroy($id)
    {
        Crop::findOrFail($id)->delete();
        return redirect()->route('crops.index');
    }
}
