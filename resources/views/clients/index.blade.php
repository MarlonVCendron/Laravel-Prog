@extends('layouts.main')

@section('content')

<h1>Clients</h1>

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
        @foreach ($clients as $c)
            <tr>
                <th scope="row">{{$c->id}}</th>
                <td>{{ $c->name }}</td>
                <td>{{ $c->cpf }}</td>
                <td>{{ $c->address }}</td>
                <td>
                    <div class="d-flex">
                        <form method="POST" action="/clients/{{ $c->id }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>

                        <a href="/clients/{{$c->id }}/edit" class="btn btn-info ms-2">
                            Edit
                        </a>

                        <a href="/clients/{{$c->id }}" class="btn btn-light ms-2">
                            View
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex">
    <a href="/" class="btn btn-secondary mt-2">
        Go back
    </a>
    <a href="/clients/create" class="btn btn-outline-success mt-2 ms-2">
        Create client
    </a>
</div>

@stop