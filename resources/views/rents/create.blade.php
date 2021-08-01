@extends('layouts.main')

@section('content')

<form method="POST" action="/rents">
    @csrf

    <legend>Create Rent</legend>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="client_id">Client</label>

                <select class="form-select" name="client_id" id="client_id" required>
                    <option value=""></option>
                    @foreach ($clients as $c)
                        <option value="{{ $c->id }}">
                            {{ $c->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="car_id">Car</label>

                <select class="form-select" name="car_id" id="car_id" required>
                    <option value=""></option>
                    @foreach ($cars as $c)
                        <option value="{{ $c->id }}">
                            {{ $c->model }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="date_start">Start date</label>
                <input type="datetime-local" name="date_start" id="date_start" class="form-control" required />
            </div>
        </div>
        <div class="col-4">
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