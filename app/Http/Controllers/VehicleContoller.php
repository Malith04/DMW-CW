<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        //Selecting all the records
        $vehicles = Vehicle::all();
        //Share data to views
        view()->share('vehicles', $vehicles);
        return view('vehicle-list');
    }

    public function create(){
        return view('add-vehicle');
    }

    public function edit($id){
        //Selecting the record
        $vehicle = Vehicle::find($id);
        //Share the values with view
        view()->share('vehicle', $vehicle);
        return view('edit-vehicle');
    }

    public function view($id){
        //Selecting a specific record from a table
        $vehicle = Vehicle::find($id);
        //Share the values with view
        view()->share('vehicle', $vehicle);
        return view('view-vehicle');
    }

    public function store(Request $request){
        //Read Data
        $data = [
            'vehicle_brand' => $request->get('vehicle_brand'),
            'vehicle_model' => $request->get('vehicle_model'),
            'vehicle_number' => $request->get('vehicle_number'),
            'passenger_count' => $request->get('passenger_count'),
            'color' => $request->get('color'),
            'chassis_number' => $request->get('chassis_number')
        ];

        //Create an object of the model
        $vehicle = new Vehicle($data);
        //save object to database table
        $vehicle->save();
        //Redirect the user to vehicle list
        return redirect('/vehicles');
    }

    public function update($id, Request $request){
        //Select the record that needs to be updated
        $vehicle = Vehicle::find($id);
        //Updating data for the selected record
        $vehicle->vehicle_brand = $request->get('vehicle_brand');
        $vehicle->vehicle_model = $request->get('vehicle_model');
        $vehicle->vehicle_number = $request->get('vehicle_number');
        $vehicle->passenger_count = $request->get('passenger_count');
        $vehicle->color = $request->get('color');
        $vehicle->chassis_number = $request->get('chassis_number');
        $vehicle->save();
        //redirect user to vehicle list
        return redirect('/vehicles');
    }

    public function delete($id){
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect('/vehicles');
    }
}