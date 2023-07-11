@extends ('layouts.app')

@section('content')
<div class="conteiner">
    @include ('messages')
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h1 class="mb-0">List Departments</h1>
                <a href="{{ route('departments.create') }}" class="btn btn-primary">Add</a>
            </div>
            
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Department Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $departments as $department )
            
          <tr>
            <th scope="row">{{ $department ->id  }}</th>
            <td>{{ $department ->DepartmentName  }}</td>
            <td>
                <form action="/departments/{{ $department -> id }}" method="POST">
                    @method ('DELETE')
                    @csrf
                    <a href="/departments/{{ $department -> id }}" class="btn btn-info">View</a>
                    <a href="/departments/{{ $department -> id }}/edit" class="btn btn-success">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
          </tr>
          @endforeach
          
        </tbody>
        </table>

</div>

@endsection 






