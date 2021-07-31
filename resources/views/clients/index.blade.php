<h1>Clients</h1>

@foreach ($clients as $c)
    <div>
        <p>{{$c->name}}</p>
        <p>{{$c->cpf}}</p>
        <p>{{$c->address}}</p>

        <form method="POST" action="/clients/{{ $c->id }}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
    </div>
@endforeach