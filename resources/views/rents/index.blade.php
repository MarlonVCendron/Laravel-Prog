@extends('layouts.main')

@section('content')

<?php
use App\Models\Car;
use App\Models\Client;
?>

<h1>Rents</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Client</th>
            <th scope="col">Car</th>
            <th scope="col">Start date</th>
            <th scope="col">End date</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rents as $r)
            <tr>
                <th scope="row">{{$r->id}}</th>
                <td>{{ Car::find($r->car_id)?->model }}</td>
                <td>{{ Client::find($r->client_id)?->name }}</td>
                <td>{{ $r->date_start }}</td>
                <td>{{ $r->date_end }}</td>
                <td>
                    <div class="d-flex">
                        <form method="POST" action="/rents/{{ $r->id }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>

                        <a href="/rents/{{$r->id }}/edit" class="btn btn-info ms-2">
                            Edit
                        </a>

                        <a href="/rents/{{$r->id }}" class="btn btn-light ms-2">
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
    <a href="/rents/create" class="btn btn-outline-success mt-2 ms-2">
        Create rent
    </a>
</div>

@stop