@extends ('layouts.app')

@section('content')
<div class="conteiner">
    @include ('messages')
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h1 class="mb-0">List Salaries</h1>
                <a href="{{ route('salaries.create') }}" class="btn btn-primary">Add</a>
            </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Salary</th>
            <th scope="col">From Date</th>
            <th scope="col">To Date</th>
            <th scope="col">Employee ID</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $salaries as $salary )
            
          <tr>
            <th scope="row">{{ $salary ->id  }}</th>
            <td>{{ $salary ->Salary  }}</td>
            <td>{{ $salary ->FromDate  }}</td>
            <td>{{ $salary ->ToDate  }}</td> 
            <td>{{ $salary ->EmployeeID  }}</td>
            <td>
                <form action="/salaries/{{ $salary -> id }}" method="POST">
                    @method ('DELETE')
                    @csrf
                    <a href="/salaries/{{ $salary -> id }}" class="btn btn-info">View</a>
                    <a href="/salaries/{{ $salary -> id }}/edit" class="btn btn-success">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
          </tr>
          @endforeach
          
        </tbody>
        </table>

</div>

@endsection 






