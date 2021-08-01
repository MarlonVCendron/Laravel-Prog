@extends('layouts.main')

@section('content')

<form method="POST" action="/clients">
    @csrf

    <legend>Create Client</legend>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" required />
            </div>
        </div>

        <div class="d-flex">
            <a href="/clients" class="btn btn-secondary mt-2">
                Go back
            </a>
            <button type="submit" class="btn btn-primary mt-2 ms-2">
                Create
            </button>
        </div>
    </div>
</form>

@stop