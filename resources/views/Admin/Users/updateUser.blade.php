@extends('Admin.Admindashboard')
@section('maincontent')
<div class="row">
    <div class="col-12">
        <div class="card flex-fill">
            <div class="card-header">
    <form method="POST" action="{{route('updateuser',['id' => $data->id])}}">
        @csrf
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control " value="{{ $data->name }}" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ $data->email }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Select Usertype</label>
        <select name="person" class="form-control form-control-md" id="">
            <option value="{{  $data->usertype }}" selected>{{  $data->usertype }}</option>
            <option value="Admin">Admin</option>
            <option value="Doctor">Doctor</option>
            <option value="patient">User</option>p
        </select>
        </div>
        <button type="submit" class="btn btn-primary mx-auto col-2 d-grid">Submit</button>
    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
