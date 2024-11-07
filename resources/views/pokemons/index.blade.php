<center>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<table border="1" cellpading="15">
    <thead>
        
@foreach($pokemons as $pokemon)
    <div>
    <th scope="col">Pokemon
        <h3>{{ $pokemon->nome }}</h3>
        <p>{{ $pokemon->tipo }}</p>
        <p>{{ $pokemon->pontos_de_poder}}</p>
        <a href="{{ url('pokemons/'.$pokemon->id.'/edit') }}"><button type="edit"class="btn btn-primary">Edit</button></a>
        <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
@endforeach
</th>
</thead>
</table>
</center>