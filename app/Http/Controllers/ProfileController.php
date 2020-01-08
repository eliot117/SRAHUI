<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        if($request->hasFile('image_profile')){
            $file = $request->file('image_profile');
            $name = time().$file->getClientOriginalName();
            //$file->move(public_path().'/storage/',$name);
            $file->move(public_path('profile/'), $name);
        }

        $profiles = new Profile();
        $profiles->name          = $request->input('name');
        $profiles->lastname      = $request->input('lastname');
        $profiles->address       = $request->input('address');
        $profiles->image_profile = $name;
        $profiles->save();

        return redirect()->route('profiles.index');
    }

    public function show($id)
    {
        return view('profiles.show',compact('profiles'));
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
