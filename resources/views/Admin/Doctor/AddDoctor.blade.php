@extends('Admin.Admindashboard')
@section('maincontent')

<div class="row">
<div class="col-12">
<div class="card flex-fill">
    <div class="card-header">
    <form method="POST" action="{{ route('store.doctor')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control " value="{{ old('name') }}" name="name" id="exampleInputEmail1" placeholder="Enter Name" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </p>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="exampleInputEmail1" placeholder="Enter Email address" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </p>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Contact</label>
            <input type="text" class="form-control " value="{{ old('contact') }}" name="contact" id="exampleInputEmail1" placeholder="Enter Contact" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('contact')
                    {{$message}}
                @enderror
            </p>
        </div>
        <div class="mb-3">
            <label class="form-label">Select Designation</label>
            <select name="designation" class="form-control form-control-md" id="">
                <option hidden>Select Designation</option>
                <option value="Head of Department">Head of Department</option>
                <option value="Surgeaon">Surgeaon</option>
                <option value="OPD Doctor">OPD Doctor</option>
            </select>
            <p class="text-danger">
                @error('designation')
                    {{$message}}
                @enderror
            </p>

        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Speciality</label>
            <input type="text" class="form-control " value="{{ old('speciality') }}" name="speciality" id="exampleInputEmail1" placeholder="Enter Speciality" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('speciality')
                    {{$message}}
                @enderror
            </p>
        </div>
        <div class="mb-3">
            <label class="form-label"> Department</label>
            <select name="department"  class="form-control  form-control-md" >
                <option hidden>Select Department</option>
                @foreach ($department as $depart )
                <option value="{{$depart->name}}">{{$depart->name}}</option>
                @endforeach

            </select>
            <p class="text-danger">
                @error('department')
                    {{ $message }}
                @enderror
            </p>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Image</label>
            <input type="file" class="form-control " value="{{ old('file') }}" name="file" placeholder="Enter Image" id="exampleInputEmail1" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('file')
                    {{$message}}
                @enderror
            </p>
        </div>

        <button type="submit" class="btn btn-primary mx-auto col-2 d-grid">Submit</button>
    </form>
    
        </div>
    </div>
</div>
</div>
    @endsection




