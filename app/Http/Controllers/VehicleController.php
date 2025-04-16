<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        //Selecting all records
        $vehicles=Vehicle::all();

        //Share data to views
        view()->share('vehicles', $vehicles);

        return view('vehicle-list');
    }
    public function create(){
        return view('add-vehicle');
    }
    public function edit($id){
        //Selecting the record
        $vehicles=Vehicle::where('vehicle_id', $id)->first();

        //Share the values with view
        view()->share('vehicle', $vehicles);
        return view('edit-vehicle');
    }
    public function view($id){
        //Select a specific record from a table
        $vehicles=Vehicle::where('vehicle_id', $id)->first();

        //Share the values with view
        view()->share('vehicle', $vehicles);
        return view('view-vehicle');
    }
    public function store(Request $request){
        //Read Data
        $data=[
            'name'=>$request->get('name'),
            'brand'=>$request->get('brand'),
            'chassis_number'=>$request->get('chassis_number'),
            'color'=>$request->get('color'),
            'passenger_count'=>$request->get('passenger_count'),
            'model_year'=>$request->get('model_year'),
            'owned_by'=>$request->get('owned_by'),
        ];

        //Create an object of the model
        $vehicles=new Vehicle($data);

        //Save object to database table
        $vehicles->save();

        //Redirect the user to the vehiclelist
        return redirect('/vehicles');
    }

    public function update($id,Request $request){
        //Select the record that needs to be updated
        $vehicle=Vehicle::find($id);

        //Updating data from the selected record
        $vehicle->name=$request->get('name');
        $vehicle->brand=$request->get('brand');
        $vehicle->chassis_number=$request->get('chassis_number');
        $vehicle->color=$request->get('color');
        $vehicle->passenger_count=$request->get('passenger_count');
        $vehicle->model_year=$request->get('model_year');
        $vehicle->owned_by=$request->get('owned_by');

        $vehicle->save();

        //Redirect user to vehicle list
        return redirect('/vehicles');
    }

    public function delete($vehicle_id){
        $vehicle=Vehicle::find($vehicle_id);
        $vehicle->delete();

        //Redirect user to user list
        return redirect('/vehicles');
    }


}
