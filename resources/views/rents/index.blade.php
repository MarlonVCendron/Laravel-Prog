@extends('layouts.main')

@section('content')

<h1>Rents</h1>

@foreach ($rents as $r)
    <div>
        <p>{{$r->client_id}}</p>
        <p>{{$r->car_id}}</p>
        <p>{{$r->date_start}}</p>
        <p>{{$r->date_end}}</p>

        <form method="POST" action="/rents/{{ $r->id }}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
    </div>
@endforeach

@stop