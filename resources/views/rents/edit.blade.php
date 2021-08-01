@extends('layouts.main')

@section('content')

<?php
$date_start = (new DateTime($rent->date_start))->format('Y-m-d\TH:i:s');
$date_end = (new DateTime($rent->date_end))->format('Y-m-d\TH:i:s');

$client_options = array_column($clients->toArray(), 'name');
$client_values = array_column($clients->toArray(), 'id');
$car_options = array_column($cars->toArray(), 'model');
$car_values = array_column($cars->toArray(), 'id');
?>

<form method="POST" action="/rents/{{ $rent->id }}">
    @csrf
    @method('PUT')

    <legend>Edit Rent</legend>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <x-select-input
                    id="client_id"
                    :options="$client_options"
                    :values="$client_values"
                    :selected="$rent->client_id">
                    Client
                </x-select-input>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <x-select-input
                    id="car_id"
                    :options="$car_options"
                    :values="$car_values"
                    :selected="$rent->car_id">
                    Car
                </x-select-input>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="date_start">Start date</label>
                <input type="datetime-local" name="date_start" id="date_start" class="form-control" value="{{ $date_start }}" required />
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="date_end">End date</label>
                <input type="datetime-local" name="date_end" id="date_end" class="form-control" value="{{ $date_end }}" required />
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