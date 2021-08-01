@extends('layouts.main')

@section('content')

<?php
use App\Models\Car;
use App\Models\Client;
?>

<h1>Rent</h1>

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
            <tr>
                <th scope="row">{{$rent->id}}</th>
                <td>{{ Car::find($rent->car_id)?->model }}</td>
                <td>{{ Client::find($rent->client_id)?->name }}</td>
                <td>{{ $rent->date_start }}</td>
                <td>{{ $rent->date_end }}</td>
                <td>
                    <div class="d-flex">
                        <form method="POST" action="/rents/{{ $rent->id }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>

                        <a href="/rents/{{$rent->id }}/edit" class="btn btn-info ms-2">
                            Edit
                        </a>
                    </div>
                </td>
            </tr>
    </tbody>
</table>

<div class="d-flex">
    <a href="/rents" class="btn btn-secondary mt-2">
        Go back
    </a>
</div>

@stop