<?php

namespace App\Http\Controllers;

use App\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
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
        if($request->hasFile('image_crop')){
            $file = $request->file('image_crop');
            $name = time().$file->getClientOriginalName();
            //$file->move(public_path().'/storage/',$name);
            $file->move(public_path('crop/'), $name);
        }

        $crops = new Crop();
        $crops->name_scientific  = $request->input('name_scientific');
        $crops->name             = $request->input('name');
        $crops->description      = $request->input('description');
        $crops->image_crop = $name;
        $crops->save();

        return redirect()->route('crops.index');
    }

    public function show($id)
    {
        $crops = Crop::findOrFail($id);
        return view('crops.show', compact('crops'));
    }

    public function edit($id)
    {
        $crops = Crop::findOrFail($id);        
        return view('crops.edit', compact('crops'));
    }

    public function update(Request $request, $id)
    {
        $crops = Crop::findOrFail($id);
        
        if($request->hasFile('image_crop')){
            $file = $request->file('image_crop');
            $name = time().$file->getClientOriginalName();
            //$file->move(public_path().'/storage/',$name);
            $file->move(public_path('crop/'), $name);
        }

        $crops->update([
            "name_scientific" => $request->input('name_scientific'),
            "name"            => $request->input('name'),
            "description"     => $request->input('description'),
            "image_crop"      => $name,
        ]);
        
        return redirect()->route('crops.index');
    }

    public function destroy($id)
    {
        Crop::findOrFail($id)->delete();
        return redirect()->route('crops.index');
    }
}
