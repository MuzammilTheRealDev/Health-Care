<?php

namespace App\Http\Controllers;

use App\Models\DoctorModel;
use App\Models\PatientModel;
use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function index()
   {
      $doc = DoctorModel::all();
      return view('healthcare')->with(['doc' => $doc]);
   }

   public function logged()
   {
      $usertype = Auth::user()->usertype;
      if ($usertype == "Admin") {
         return view('Admin.Admindashboard');
      } else {
         return view('healthcare');
      }
   }

   public function showusers()
   {
      $users = User::whereIn('usertype', ['Admin', 'Doctor'])->get();
      return view('Admin.Users.showusers')->with(['users' => $users]);
   }


   public function deleteusers($id){
      $data = UserModel::find($id);
      $data->delete();
      return redirect()->back();
   }
   public function edituser($id){
      $data = UserModel::find($id);
      return view('Admin.Users.updateUser')->with(['data' => $data]);
   }
   public function updateuser(Request $request , $id){
      $request->validate([
         'name' => 'required',
         'email' => 'required',
         'person' => 'required'
      ]);
      $data = UserModel::find($id);
      $data->name = $request->name;
      $data->email = $request->email;
      $data->usertype = $request->person;
      $data->save();
      return redirect()->route('showusers');
   }
}
