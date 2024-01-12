@extends('Admin\Admindashboard')

@section('maincontent')
<div>
    <a href="{{ route('add.department')}}" class="btn btn-info mb-3 d-grid mx-auto col-3 ">Add New Department</a>
</div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">

                <table class="table  my-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Head Of Department</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <td>{{ $department->id }}</td>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->hod }}</td>
                                <td>{{ $department->created_at }}</td>
                                <td>
                                    <a href="{{ route('edit.department',['id' => $department->id])}}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('delete.department',['id' => $department->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
