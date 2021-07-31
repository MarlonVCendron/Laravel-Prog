<form method="POST" action="/cars/{{ $car->id }}">
    @csrf
    @method('PUT')

    <legend>Edit Car</legend>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" name="model" id="model" class="form-control" value="{{ $car->model }}" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" name="brand" id="brand" class="form-control" value="{{ $car->brand }}" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" id="year" class="form-control" value="{{ $car->year }}" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $car->price }}" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="km">KM (Mileage in km)</label>
                <input type="number" name="km" id="km" class="form-control" value="{{ $car->km }}" required />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary mt-2">
                    Update
                </button>
            </div>
        </div>
</form>