<?php

namespace App\Http\Controllers;

use App\Models\DepartmentModel;
use App\Models\DoctorModel;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Hod = DoctorModel::where('designation','Head of Department')->get();
        return view('Admin.Department.addDepartment')->with(['Hod' => $Hod]);
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
            'hod' => 'required'
        ]);
        $data = new DepartmentModel();
        $data->name = $request->name;
        $data->hod = $request->hod;
        $data->save();
        return redirect()->route('show.department');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $departments = DepartmentModel::all();
        return view('Admin.Department.showDepartment')->with(['departments' => $departments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Hod = DoctorModel::where('designation','Head of Department')->get();
        $data  = DepartmentModel::find($id);
        return view('Admin.Department.updateDepartment')->with(['data' => $data , 'Hod' => $Hod]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = DepartmentModel::find($id);
        $request->validate([
            'name' => 'required',
            'hod' => 'required'
        ]);
        $data->name = $request->name;
        $data->hod = $request->hod;
        $data->save();
        return redirect()->route('show.department');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DepartmentModel::find($id);
        $data->delete();
        return redirect()->back();
    }
}
