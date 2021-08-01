@extends('layouts.main')

@section('content')

<form method="POST" action="/cars">
    @csrf

    <legend>Create Car</legend>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" name="model" id="model" class="form-control" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" name="brand" id="brand" class="form-control" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" id="year" class="form-control" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="km">KM (Mileage in km)</label>
                <input type="number" name="km" id="km" class="form-control" required />
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