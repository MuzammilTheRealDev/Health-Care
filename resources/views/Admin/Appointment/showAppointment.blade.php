@extends('Admin\Admindashboard')

@section('maincontent')
<div>
    {{-- <a href="{{ route('add.appointment')}}" class="btn btn-info mb-3 d-grid mx-auto col-3 ">Add New Appointment</a> --}}
</div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">

                <table class="table table-responsive my-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Number</th>
                            <th>Doctor</th>
                            <th>Booked By</th>
                            <th>Status</th>
                            <th>Message</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->id }}</td>
                                <td>{{ $appointment->name }}</td>
                                <td>{{ $appointment->email }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->number }}</td>
                                <td>{{ $appointment->doctor }}</td>
                                <td>{{ $appointment->booked_by }}</td>
                                <td ><a href="#" class="btn btn-success btn-sm">{{ $appointment->status_appointment }}</a></td>
                                <td>{{ $appointment->message }}</td>
                                <td>{{ $appointment->created_at }}</td>
                                <td>
                                    <a href="{{ route('edit.appointment',['id' => $appointment->id])}}" class="btn btn-primary cl-8 d-grid">Edit</a>
                                    <a href="{{ route('delete.appointment',['id' => $appointment->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
