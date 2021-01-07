<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //GET listar coches
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $search_car = Car::where('name', 'like', '%' . $request->search . '%')->get();
        }
        else{
            $search_car = Car::all();
        }
        return $search_car;
    }

    //POST crear coche
    public function store(CreateCarRequest $request)
    {
        $create_car = $request->all();
        Car::create($create_car);
        return response()->json([
            'res' => true,
            'message' => 'Added Car'
        ], 200);
    }

    //GET devuelve un solo coche
    public function show(Car $car)
    {
        return $car;
    }

    //PUT actualizar coches
    public function update(UpdateCarRequest $request, Car $car)
    {
        $update_car = $request->all();
        $car->update($update_car);
        return response()->json([
            'res' => true,
            'message' => 'Updated Car'
        ], 200);
    }

    //DELETE eliminar coches
    public function destroy($id)
    {
        Car::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Deleted Car'
        ], 200);
    }
}
