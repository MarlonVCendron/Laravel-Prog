@extends('layouts.main')

@section('content')

<h1>Client</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">CPF</th>
            <th scope="col">Address</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{$client->id}}</th>
            <td>{{ $client->name }}</td>
            <td>{{ $client->cpf }}</td>
            <td>{{ $client->address }}</td>
            <td>
                <div class="d-flex">
                    <form method="POST" action="/clients/{{ $client->id }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>

                    <a href="/clients/{{$client->id }}/edit" class="btn btn-info ms-2">
                        Edit
                    </a>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<div class="d-flex">
    <a href="/clients" class="btn btn-secondary mt-2">
        Go back
    </a>
</div>

@stop