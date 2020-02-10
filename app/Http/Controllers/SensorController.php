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
    
    public function add(Request $request)
    {
        $sensors = new Sensor();
        $sensors->temperature = $request->input('temperature');
        $sensors->humidity    = $request->input('humidity');
        $sensors->ground      = $request->input('ground');
        $sensors->save();

        return $sensors;
    }

    public function get($id)
    {
       $sensors = Sensor::findOrFail($id);
       return $sensors;
    }

    public function edit($id, Request $request)
    {
       $sensors = $this->get($id);
       $sensors->fill($request->all())->save();
       return $sensors;
    }

    public function delete($id)
    {
       $sensors = $this->get($id);
       $sensors->delete();
       return $sensors;
    }
}
