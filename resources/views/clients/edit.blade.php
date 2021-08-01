@extends('layouts.main')

@section('content')

<form method="POST" action="/clients/{{ $client->id }}">
    @csrf
    @method('PUT')

    <legend>Edit Client</legend>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $client->name }}" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $client->cpf }}" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $client->address }}" required />
            </div>
        </div>
    
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary mt-2">
                    Update
                </button>
            </div>
        </div>
    </div>
</form>

@stop