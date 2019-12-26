<?php

namespace App\Http\Controllers;

use App\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    public function index()
    {
        $crops = Crop::all();
        return view('crop.index', compact('crop'));
    }

    public function create()
    {
        return view('crop.create');
    }

    public function store(Request $request)
    {
        if($request->hasFile('image_crop')){
            $file = $request->file('image_crop');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/crop/',$name);
        }

        $crops = new Crop();
        $crops->name_scientific  = $request->input('name_scientific');
        $crops->name             = $request->input('name');
        $crops->description      = $request->input('description');
        $crops->image_crop = $name;
        $crops->save();

        return redirect()->route('crop.index');
    }

    public function show($idcultivo)
    {
        $crops = Crop::findOrFail($idcultivo);
        return view('crop.show', compact('crop'));
    }

    public function edit($idcultivo)
    {
        $crops = Crop::findOrFail($idcultivo);        
        return view('crop.edit', compact('crop'));
    }

    public function update(Request $request, $idcultivo)
    {
        $users = User::findOrFail($idcultivo);
        
        if($request->hasFile('image_crop')){
            $file = $request->file('image_crop');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/crop/',$name);
        }

        $users->update([
            "name_scientific" => $request->input('name_scientific'),
            "name"            => $request->input('name'),
            "description"     => $request->input('description'),
            "image_crop"      => $name,
        ]);
        
        return redirect()->route('crop.index');
    }

    public function destroy($idcultivo)
    {
        Crop::findOrFail($idcultivo)->delete();
        return redirect()->route('crop.index');
    }
}
