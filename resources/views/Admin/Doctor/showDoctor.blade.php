@extends('Admin\Admindashboard')

@section('maincontent')
<div>
    <a href="{{ route('add.doctor')}}" class="btn btn-info mb-3 d-grid mx-auto col-3 ">Add New Doctors</a>
</div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">

                <table class="table table-responsive  my-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Designation</th>
                            <th>Speciality</th>
                            <th>Department</th>
                            <th>Image</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->id }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->email }}</td>
                                <td>{{ $doctor->contact }}</td>
                                <td>{{ $doctor->designation }}</td>
                                <td>{{ $doctor->speciality }}</td>
                                <td>{{ $doctor->department }}</td>
                                <td>
                                    @if (File::exists(public_path('Admin/Doctorimages/' . $doctor->image)))
                                        <img  src="{{ asset('Admin/Doctorimages/' . $doctor->image)}}" height="120px" width="100px" alt="" >
                                    @else
                                    Image not found
                                    @endif
                                    
                                </td>
                                <td>{{ $doctor->created_at }}</td>
                                <td>
                                    <a href="{{ route('edit.doctor',['id' => $doctor->id])}}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('delete.doctor',['id' => $doctor->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
