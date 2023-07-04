@extends ('layouts.app')

@section('content')
<div class="container"> 
<div class="card col-6 offset-3">
    <h5 class="card-header">{{ $employee -> FirstName }}</h5>
    <div class="card-body">
        <h5 class="card-title">{{ $employee -> LastName }}</h5>
        <p class="card-text">{{ $employee -> HireDate }}</p>
        <p class="card-text">{{ $employee -> Gender }}</p>
    </div>
</div>
</div>
@endsection
