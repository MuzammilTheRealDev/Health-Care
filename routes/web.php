<?php

use App\Models\DepartmentModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AdminController::class,'index'])->name('web.main');
Route::get('/logged',[AdminController::class,'logged'])->name('logged');

Route::get('/user/show',[AdminController::class,'showusers'])->name('showusers');
Route::get('/deleteUser/{id}',[AdminController::class,'deleteusers'])->name('deleteusers');
Route::get('/editUser/{id}',[AdminController::class,'edituser'])->name('edituser');
Route::post('/updateUser/{id}',[AdminController::class,'updateuser'])->name('updateuser');

Route::get('/deletePatient/{id}',[PatientsController::class,'deletepatients'])->name('deletepatients');
Route::get('/editPatient/{id}',[PatientsController::class,'editpatient'])->name('editpatient');
Route::post('/updatePatient/{id}',[PatientsController::class,'updatepatient'])->name('updatepatient');
Route::get('/patients/show',[PatientsController::class,'showpatients'])->name('showpatients');

Route::get('/doctor/add',[DoctorController::class,'index'])->name('add.doctor');
Route::post('/doctor/store',[DoctorController::class,'store'])->name('store.doctor');
Route::get('/doctor/show',[DoctorController::class,'show'])->name('show.doctor');
Route::get('/doctor/edit/{id}',[DoctorController::class,'edit'])->name('edit.doctor');
Route::post('/doctor/update/{id}',[DoctorController::class,'update'])->name('update.doctor');
Route::get('/doctor/delete/{id}',[DoctorController::class,'destroy'])->name('delete.doctor');

Route::get('/department/add',[DepartmentController::class,'index'])->name('add.department');
Route::post('/department/store',[DepartmentController::class,'store'])->name('store.department');
Route::get('/department/show',[DepartmentController::class,'show'])->name('show.department');
Route::get('/department/edit/{id}',[DepartmentController::class,'edit'])->name('edit.department');
Route::post('/department/update/{id}',[DepartmentController::class,'update'])->name('update.department');
Route::get('/department/delete/{id}',[DepartmentController::class,'destroy'])->name('delete.department');

Route::get('/appointment/add',[AppointmentController::class,'index'])->name('add.appointment');
Route::post('/appointment/store',[AppointmentController::class,'store'])->name('store.appointment');
Route::get('/appointment/show',[AppointmentController::class,'show'])->name('show.appointment');
Route::get('/appointment/edit/{id}',[AppointmentController::class,'edit'])->name('edit.appointment');
Route::post('/appointment/update/{id}',[AppointmentController::class,'update'])->name('update.appointment');
Route::get('/appointment/delete/{id}',[AppointmentController::class,'destroy'])->name('delete.appointment');

// Route::get('')
// Route::get('/dash',function()
// {
//     return view('Admin\Admindashboard');
// }
// );

Route::get('/doctor',function()
{
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
