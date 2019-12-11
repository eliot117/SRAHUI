<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class CropsController extends Controller
{
    public function index()
    {
        return view('crops.index');
    }

    public function create()
    {
        return view('crops.create');
    }

    public function store(Request $request)
    {
        DB::table('cultivo')->insert([
            "name_scientific"=> $request->input('name_scientific'),
            "name"=> $request->input('name'),
            "description"=>$request->input('description'),
        ]);

        return view('crops.index');
    }

    public function show($id)
    {
        return view('crops.show');
    }

    public function edit($id)
    {
        return view('crops.edit');
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
