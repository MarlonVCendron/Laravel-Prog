@extends('layouts.main')

@section('content')

<h1>Car</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Model</th>
            <th scope="col">Brand</th>
            <th scope="col">Year</th>
            <th scope="col">Price</th>
            <th scope="col">KM</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{$car->id}}</th>
            <td>{{ $car->model }}</td>
            <td>{{ $car->brand }}</td>
            <td>{{ $car->year }}</td>
            <td>R$ {{ $car->price }}</td>
            <td>{{ $car->km }}</td>
            <td>
                <div class="d-flex">
                    <form method="POST" action="/cars/{{ $car->id }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>

                    <a href="/cars/{{$car->id }}/edit" class="btn btn-info ms-2">
                        Edit
                    </a>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<div class="d-flex">
    <a href="/cars" class="btn btn-secondary mt-2">
        Go back
    </a>
</div>

@stop