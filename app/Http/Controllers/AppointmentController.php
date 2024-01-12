<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\DoctorModel;
use Illuminate\Http\Request;
use App\Models\AppointmentModel;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Appointment.addAppointment');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'doctor' => 'required',
            'number' => 'required'
        ]);
        $data = new AppointmentModel();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->doctor = $request->doctor;
        $data->number = $request->number;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('show.appointment');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $appointments = AppointmentModel::all();
        return view('Admin.Appointment.showAppointment')->with(['appointments' => $appointments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {  
        $status = UserModel::all(); 
        $doc = DoctorModel::all();
        $appointment = AppointmentModel::find($id);
        return view('Admin.Appointment.updateAppointment')->with(['appointment' => $appointment,'doc' => $doc ,'status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = AppointmentModel::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'doctor' => 'required',
            'number' => 'required'
        ]);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->doctor = $request->doctor;
        $data->number = $request->number;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('show.appointment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = AppointmentModel::find($id);
        $data->delete();
        return redirect()->back();
    }
}
