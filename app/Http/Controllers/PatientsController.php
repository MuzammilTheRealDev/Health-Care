<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PatientModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PatientsController extends Controller
{
    public function showpatients()
    {
        $users = User::where('usertype', 'patient')->get();
        return view('Admin\patients\showpatients')->with(['users' => $users]);
    }
    public function deletePatients($id)
    {
        $data = PatientModel::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editpatient($id){
        $data = PatientModel::find($id);
        return view('Admin.patients.updatePatient')->with(['data' => $data]);
    }
    public function updatepatient(Request $request , $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'person' => 'required'            
        ]);
        $data = PatientModel::find($id);
        // database coloumn name is written on left side and form name is written on right side
        $data->name = $request->name;
        $data->email = $request->email;
        $data->usertype = $request->person;
        $data->save();
        return redirect()->route('showpatients');
    }
}
