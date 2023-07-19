<!DOCTYPE html>
<html>
<head>
    <title>Pokédex</title>
    <link rel="stylesheet" type="text/css" href="pokedex.css">
</head>
<body>
    <div class="search-bar">
        <input type="text" id="search-input" placeholder="Buscar Pokémon...">
        <button onclick="searchPokemon()">Buscar</button>
    </div>

    <div id="pokemon-list">
        <!-- Aquí se mostrará la lista de Pokémon -->
    </div>

    <div id="pokemon-details">
        <!-- Aquí se mostrarán los detalles del Pokémon seleccionado -->
    </div>

    <script src="pokedex.js"></script>
</body>
</html>
