<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        //Selecting all the records
        $users=User::all();
        //Share data to views
        view()->share('users',$users);
        return view('user-list');
    }
    public function create(){
        return view('add-user');
    }
    public function edit($id){
        //Selecting the record
        $user=User::find($id);//used when selecting a record using primary key
        //Share the values with view
        view()->share('user',$user);
        return view('edit-user');
    }
    public function view($id){
        //Selecting a specific record from a table
        $user=User::where('id',$id)->first();//User::find($id);
        //Share the values with view
        view()->share('user',$user);
        return view('view-user');
    }
    public function store(Request $request){
        //Read Data
        $data=[
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
            'age'=>$request->get('age'),
            'password'=>Hash::make($request->get('password'))//encrypt the password
        ];
        //Create an object of the model
        $user=new User($data);
        //save object to database table
        $user->save();
        //Redirect the user to userlist
        return redirect('/users');
    }
    public function update($id,Request $request){
        //Select the record that needs to be updated
        $user=User::find($id);
        //Updating data for the selected record
        $user->username=$request->get('username');
        $user->email=$request->get('email');
        $user->age=$request->get('age');
        $user->password=Hash::make($request->get('password'));
        $user->save();
        //redirect user to user list
        return redirect('/users');
    }
    public function delete($id){
        $user=User::find($id);
        $user->delete();
        return redirect('/users');
    }
}
