@extends('Admin.Admindashboard')
@section('maincontent')

<div class="row">
<div class="col-12">
<div class="card flex-fill">
    <div class="card-header">
    <form method="POST" action="{{ route('update.department',['id' => $data->id])}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control " value="{{ $data->name }}" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </p>
        </div>

        <div class="mb-3">
            <label class="form-label">Head of Department</label>
            <select name="hod" class="form-control form-control-md" id="">
                <option hidden>Select</option>
                @foreach ($Hod as $hod )
                    
                <option value="{{$hod->name}}">{{$hod->name}}</option>
                @endforeach
            </select>
            <p class="text-danger">
                @error('hod')
                    {{$message}}
                @enderror
            </p>


        <button type="submit" class="btn btn-primary mx-auto col-2 d-grid">Submit</button>
    </form>
    
        </div>
    </div>
</div>
</div>
    @endsection




