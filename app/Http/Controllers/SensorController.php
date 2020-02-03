<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;

class SensorController extends Controller
{
    public function getAll()
    {
        $sensors = Sensor::all();
        return $sensors;
    }
    
    public function index()
    {
        $sensors = Sensor::all();
        return view('sensors.index', compact('sensors'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
