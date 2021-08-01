<form method="POST" action="/rents">
    @csrf

    <legend>Create Rent</legend>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="client_id">Client ID</label>
                <input type="number" name="client_id" id="client_id" class="form-control" required />
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="car_id">Car ID</label>
                <input type="number" name="car_id" id="car_id" class="form-control" required />
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