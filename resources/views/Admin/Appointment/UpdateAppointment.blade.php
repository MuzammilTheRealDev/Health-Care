@extends('Admin.Admindashboard')
@section('maincontent')

<div class="row">
<div class="col-12">
<div class="card flex-fill">
    <div class="card-header">
    <form method="POST" action="{{ route('update.appointment',['id' => $appointment->id])}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control " value="{{ $appointment->name }}" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </p>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ $appointment->email }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </p>
        </div>

        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Date</label>
            <input type="date" class="form-control " value="{{ $appointment->date }}" name="date" id="exampleInputEmail1" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('date')
                    {{$message}}
                @enderror
            </p>
        </div>

        <div class="mb-3">
            <label class="form-label">Doctor</label>
            <select name="doctor" class="form-control form-control-md">

                <option hidden>Select</option>
                @foreach ($doc as $doctor )
                <option value="{{$doctor->name}}">{{$doctor->name}}--Speciality--{{$doctor->speciality}}</option>
                    
                @endforeach

            </select>
            <p class="text-danger">
                @error('doctor')
                    {{ $message }}
                @enderror
            </p>
        </div>
        <div class="mb-3 ">
            {{-- <label for="exampleInputEmail1" class="form-label">Booked By</label>
            <input type="text" class="form-control " value="{{  }}" name="booked_by" id="exampleInputEmail1" aria-describedby="emailHelp">
            <p class="text-danger"> --}}
                <label class="form-label">Booked By</label>
                <select name="booked_by" class="form-control form-control-md" id="">
                    <option hidden>Select</option>
                    @foreach ( $status as $status )
                    <option  value="{{ $status->usertype  }}">{{ $status->usertype }}</option>
                    @endforeach
                </select>
                @error('booked_by')
                {{$message}}
                @enderror
            </p>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Status_appointment</label>
            <input type="text" class="form-control " value="{{ $appointment->status_appointment }}" name="status_appointment" id="exampleInputEmail1" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('status_appointment')
                {{$message}}
                @enderror
            </p>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Number</label>
            <input type="text" class="form-control " value="{{ $appointment->number }}" name="number" id="exampleInputEmail1" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('number')
                    {{$message}}
                @enderror
            </p>
        </div>
        <label for="Message">Additional Message</label>
        <textarea class="form-control" rows="5" id="message" name="message"value="{{$appointment->message}}" placeholder="Message"></textarea>
                <p class="text-danger">
                @error('message')
                {{$message}}
                @enderror
                </p>
        {{-- <div class="mb-3">
            <label class="form-label">Select Designation</label>
            <select name="designation" class="form-control form-control-md" id="">
                <option value="{{ $appointment->designation}}" selected>{{ $appointment->designation}}</option>
                <option hidden>Select</option>
                <option value="Head of Department">Head of Department</option>
                <option value="surgeaon">Surgeaon</option>
                <option value="opd_appointment">OPD appointment</option>
            </select>
            <p class="text-danger">
                @error('designation')
                    {{$message}}
                @enderror
            </p>
        </div> --}}




        {{-- <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Image</label>
            <td>
                @if (File::exists(public_path('Admin/appointmentimages/' . $appointment->image)))
                    <img src="{{ asset('Admin/appointmentimages/' . $appointment->image)}}"  height="120px" width="100px" alt="">
                @else
                Image not found
                @endif
            </td>
            <input type="file" class="form-control" name="file" id="exampleInputEmail1" aria-describedby="emailHelp">
            <p class="text-danger">
                @error('file')
                    {{$message}}
                @enderror
            </p>
        </div> --}}
        <button type="submit" class="btn btn-primary mx-auto col-2 d-grid">Update</button>
    </form>
    
        </div>
    </div>
</div>
</div>
    @endsection