<?php

namespace App\Http\Controllers;

use App\Datausers;
use Illuminate\Http\Request;

class DataUsersController extends Controller
{
    public function index()
    {
        $data = Datausers::all();
        return view('datausers.index', compact('datausers'));
    }

    public function create()
    {
        return view('datausers.create');
    }

    public function store(Request $request)
    {
        if($request->hasFile('image_profile')){
            $file = $request->file('image_profile');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/profile/',$name);
        }
        
        $data = new Datausers();
        $data->name          = $request->input('name');
        $data->lastaname     = $request->input('lastname');
        $data->address       = $request->input('address');
        $data->image_profile = $name;
        $data->save();

        return redirect()->route('datausers.index');
    }

    /*public function show($idusers)
    {
        $data = Datausers::findOrFail($idusers);
        return view('datausers.show', compact('datausers'));
    }*/

    public function edit($idusers)
    {
        $data = Datausers::findOrFail($idusers);
        return view('datausers.edit', compact('datausers'));
    }

    public function update(Request $request, $idusers)
    {
        $data = Datausers::findOrFail($idusers);

        if($request->hasFile('image_profile')){
            $file = $request->file('image_profile');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/profile/',$name);
        }
        
        $data->update([
            "name"            => $request->input('name'),
            "lastname"        => $request->input('lastname'),
            "address"         => $request->input('description'),
            "image_profile"   => $name,
        ]);

        return redirect()->route('datausers.index');
    }
    /*
    public function destroy($idusers)
    {
        Datausers::findOrFail($idusers)->delete();
        return redirect()->route('datausers.index');
    }*/
}
