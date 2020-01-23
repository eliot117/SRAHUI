<?php

namespace App\Http\Controllers;

use App\Crop;
use App\Epoch;
use App\Family;
use Illuminate\Http\Request;

class CropController extends Controller
{

    public function index()
    {
        $crops = Crop::with(['epoch','family','pest'])->get();
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
            $file->move(public_path('crop/'), $name);
        }

        $crops = new Crop();
        $crops->name_scientific  = $request->input('name_scientific');
        $crops->name             = $request->input('name');
        $crops->description      = $request->input('description');
        $crops->image_crop = $name;
        $crops->save();

        $crops->epoch()->create([
            'name_epoch' => $request->input('name_epoch'),
        ]);

        $crops->family()->create([
            'namefamily'         => $request->input('namefamily'),
            'description_family' => $request->input('description_family'),
        ]);

        $crops->pest()->create([
            'name_pest'         => $request->input('name_pest'),
            'description_pest'  => $request->input('description_pest'),
        ]);

        $crops->plant()->create([
            'type_plant'         => $request->input('type_plant'),
            'description_plant'  => $request->input('description_plant'),
        ]);

        return redirect()->route('crops.index')->with('success','Cultivo Nuevo');
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
            $file->move(public_path('crop/'), $name);
        }

        $crops->update([
            "name_scientific" => $request->input('name_scientific'),
            "name"            => $request->input('name'),
            "description"     => $request->input('description'),
            "image_crop"      => $name,
        ]);
        
        if (is_null($crops->epoch()->first())) 
        {
            $crops->epoch()->updateOrCreate([
                'name_epoch' => $request->input('name_epoch'),
            ]);
        }
        else
        {
            $crops->epoch()->update([
                'name_epoch' => $request->input('name_epoch'),
            ]);
        }
        
        if (is_null($crops->family()->first())) 
        {
            $crops->family()->updateOrCreate([
                'namefamily'         => $request->input('namefamily'),
                'description_family' => $request->input('description_family'),
            ]);
        }
        else
        {
            $crops->family()->update([
                'namefamily'         => $request->input('namefamily'),
                'description_family' => $request->input('description_family'),
            ]);
        }

        if(is_null($crops->pest()->first()))
        {
            $crops->pest()->updateOrCreate([
                'name_pest'         => $request->input('name_pest'),
                'description_pest' => $request->input('description_pest'),
            ]);
        }
        else
        {
            $crops->pest()->update([
                'name_pest'         => $request->input('name_pest'),
                'description_pest' => $request->input('description_pest'),
            ]);
        }

        if(is_null($crops->plant()->first()))
        {
            $crops->plant()->updateOrCreate([
                'type_plant'        => $request->input('type_plant'),
                'description_plant' => $request->input('description_plant'),
            ]);
        }
        else
        {
            $crops->plant()->update([
                'type_plant'        => $request->input('type_plant'),
                'description_plant' => $request->input('description_plant'),
            ]);
        }

        return redirect()->route('crops.index')->with('success','Cultivo Actualizado');
    }

    public function destroy($id)
    {
        Crop::findOrFail($id)->delete();
        Epoch::findOrFail($id)->delete();
        Family::findOrFail($id)->delete();
        Pest::findOrFail($id)->delete();
        Plant::findOrFail($id)->delete();
        return redirect()->route('crops.index')->with('warning','Cultivo Eliminado');
    }
}
