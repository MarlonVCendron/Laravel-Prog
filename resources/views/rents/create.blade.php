@extends('layouts.main')

@section('content')

<?php
$client_options = array_column($clients->toArray(), 'name');
$client_values = array_column($clients->toArray(), 'id');
$car_options = array_column($cars->toArray(), 'model');
$car_values = array_column($cars->toArray(), 'id');
?>

<form method="POST" action="/rents">
    @csrf

    <legend>Create Rent</legend>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <x-select-input
                    id="client_id"
                    :options="$client_options"
                    :values="$client_values">
                    Client
                </x-select-input>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <x-select-input
                    id="car_id"
                    :options="$car_options"
                    :values="$car_values">
                    Car
                </x-select-input>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="date_start">Start date</label>
                <input type="datetime-local" name="date_start" id="date_start" class="form-control" required />
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="date_end">End date</label>
                <input type="datetime-local" name="date_end" id="date_end" class="form-control" required />
            </div>
        </div>
    
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary mt-2">
                    Create
                </button>
            </div>
        </div>
    </div>
</form>

@stop