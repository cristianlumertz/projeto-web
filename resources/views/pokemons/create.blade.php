<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<center>
<div class="p-3 mb-2 bg-primary text-white">
    
<table class = "p-3 mb-2 bg-primary text-white">
    <thead>
<form action="{{ url('pokemons') }}" method="POST">
    @csrf
    <th scope="col">Pokemon
    <input type="text" name="nome" placeholder="Name" required>
    </th>
    <th scope="col">Tipo
    <input type="text" name="tipo" placeholder="Type" required></input>
    </th>
    <th scope="col">Pontos de Poder
    <input type="numeric" name="pontos_de_poder" placeholder="Power" required>
    </th>
    <th scope="col">
    <button type="submit" class="btn btn-danger">Create Pokemon</button>
    </th>
</form>
</thead>
</table>
</div>
</center>