@extends('layouts.main')

@section('content')

<h1>Cars</h1>

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
        @foreach ($cars as $c)
            <tr>
                <th scope="row">{{$c->id}}</th>
                <td>{{ $c->model }}</td>
                <td>{{ $c->brand }}</td>
                <td>{{ $c->year }}</td>
                <td>R$ {{ $c->price }}</td>
                <td>{{ $c->km }}</td>
                <td>
                    <div class="d-flex">
                        <form method="POST" action="/cars/{{ $c->id }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>

                        <a href="/cars/{{$c->id }}/edit" class="btn btn-info ms-2">
                            Edit
                        </a>

                        <a href="/cars/{{$c->id }}" class="btn btn-light ms-2">
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
    <a href="/cars/create" class="btn btn-outline-success mt-2 ms-2">
        Create car
    </a>
</div>

@stop