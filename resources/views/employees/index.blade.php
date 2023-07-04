@extends ('layouts.app')

@section('content')
<div class="conteiner">
    @include ('messages')
    <table class="table">
      <input type="search" wire:model="search" class="form-control float-end mx-1" placeholder="Search..." style="width: 300px" />
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Hire Date</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $employees as $employee )
            
          <tr>
            <th scope="row">{{ $employee ->id  }}</th>
            <td>{{ $employee ->FirstName  }}</td>
            <td>{{ $employee ->LastName  }}</td>
            <td>{{ $employee ->Birthday  }}</td> 
            <td>{{ $employee ->HireDate  }}</td>
            <td>{{ $employee ->Gendrer  }}</td>
            <td>
                <form action="/employees/{{ $employee -> id }}" method="POST">
                    @method ('DELETE')
                    @csrf
                    <a href="/employees/{{ $employee -> id }}" class="btn btn-info">View</a>
                    <a href="/employees/{{ $employee -> id }}/edit" class="btn btn-success">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
          </tr>
          
          @endforeach
          
        </tbody>
        </table>

</div>

@endsection 






