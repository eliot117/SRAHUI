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
            //$file->move(public_path().'/storage/',$name);
            $file->move(public_path('image/crop'), $name);
        }

        $crops = new Crop();
        $crops->name_scientific  = $request->input('name_scientific');
        $crops->name             = $request->input('name');
        $crops->description      = $request->input('description');
        $crops->image_crop = $name;
        $crops->save();

        return redirect()->route('crop.index');
    }

    public function show($id)
    {
        $crops = Crop::findOrFail($id);
        return view('crop.show', compact('crop'));
    }

    public function edit($id)
    {
        $crops = Crop::findOrFail($id);        
        return view('crop.edit', compact('crop'));
    }

    public function update(Request $request, $id)
    {
        $users = Crop::findOrFail($id);
        
        if($request->hasFile('image_crop')){
            $file = $request->file('image_crop');
            $name = time().$file->getClientOriginalName();
            //$file->move(public_path().'/storage/',$name);
            $file->move(public_path('image/crop'), $name);
        }

        $users->update([
            "name_scientific" => $request->input('name_scientific'),
            "name"            => $request->input('name'),
            "description"     => $request->input('description'),
            "image_crop"      => $name,
        ]);
        
        return redirect()->route('crop.index');
    }

    public function destroy($id)
    {
        Crop::findOrFail($id)->delete();
        return redirect()->route('crop.index');
    }
}
