<?php

namespace App\Http\Controllers;

use App\Models\DepartmentModel;
use App\Models\DoctorModel;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department =  DepartmentModel::all();
        return view('Admin.Doctor.AddDoctor')->with(['department'=> $department]);
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
            'contact' => 'required',
            'designation' => 'required',
            'speciality' => 'required',
            'department' => 'required',
            'file' => 'required|mimes:jpg,png,jpeg,pdf'
        ]);
        $imagename = microtime(true) . "healthcare." . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('Admin\Doctorimages'),$imagename);
        $data = new DoctorModel();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->contact = $request->contact;
        $data->designation = $request->designation;
        $data->speciality = $request->speciality;
        $data->department = $request->department;
        $data->image = $imagename;
        $data->save();
        return redirect()->route('show.doctor');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $doctors = DoctorModel::all();
        return view('Admin.Doctor.showDoctor')->with(['doctors' => $doctors]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $department =  DepartmentModel::all();
        $doctor = DoctorModel::find($id);
        return view('Admin.Doctor.updateDoctor')->with(['doctor' => $doctor , 'department' => $department]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = DoctorModel::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'designation' => 'required',
            'speciality' => 'required',
            'department' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg',
        ]);
        if($request->hasFile('file')){
            $publicPath = public_path('Admin/Doctorimages/' . $data->image);
            if(file_exists($publicPath)){
                unlink($publicPath);
            }
            $imagename = microtime(true) . "healthcare." . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('Admin\Doctorimages'), $imagename);

            $data->name = $request->name;
            $data->email = $request->email;
            $data->contact = $request->contact;
            $data->designation = $request->designation;
            $data->speciality = $request->speciality;
            $data->department = $request->department;
            $data->image = $imagename;
            $data->save();
            return redirect()->route('show.doctor');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)    {
        $data = DoctorModel::find($id);
        $publicPath = public_path('Admin/Doctorimages/'. $data->image);
        if(file_exists($publicPath)){
            unlink($publicPath);
    }
    $data->delete();
    return redirect()->back();
}
}
