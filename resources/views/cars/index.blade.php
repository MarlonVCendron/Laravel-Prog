<h1>Cars</h1>

@foreach ($cars as $c)
    <div>
        <p>{{$c->model}}</p>
        <p>{{$c->brand}}</p>
        <p>{{$c->year}}</p>
        <p>{{$c->price}}</p>
        <p>{{$c->km}}</p>

        <form method="POST" action="/cars/{{ $c->id }}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
    </div>
@endforeach