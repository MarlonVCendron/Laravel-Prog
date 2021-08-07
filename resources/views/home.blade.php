@extends('layouts.main')

@section('content')
<div class="container">
    <div class="d-flex">
        <a href="/cars" class="btn btn-lg btn-outline-primary">
            Cars
        </a>
        <a href="/clients" class="btn btn-lg btn-outline-primary ms-2">
            Clients
        </a>
        <a href="/rents" class="btn btn-lg btn-outline-primary ms-2">
            Rents
        </a>
    </div>
</div>
@endsection