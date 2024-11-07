<form action="{{ url('pokemons/' . $pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="Name" required>
    <textarea name="tipo" placeholder="Description" required></textarea>
    <input type="numeric" name="pontos_de_poder" placeholder="Name" required>
    <button type="submit">Edit Pokemon</button>
</form>