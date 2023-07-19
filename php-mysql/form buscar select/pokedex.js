const pokemonData = [
    { name: 'Bulbasaur', number: 1, type: 'Grass', image: 'bulbasaur.png' },
    { name: 'Charmander', number: 4, type: 'Fire', image: 'charmander.png' },
    { name: 'Squirtle', number: 7, type: 'Water', image: 'squirtle.png' },
    // Agrega más objetos para más Pokémon
];

function searchPokemon() {
    const searchInput = document.getElementById('search-input').value.toLowerCase();
    const filteredPokemon = pokemonData.filter(pokemon =>
        pokemon.name.toLowerCase().includes(searchInput) || pokemon.number.toString().includes(searchInput)
    );

    displayPokemonList(filteredPokemon);
}

function displayPokemonList(pokemonList) {
    const pokemonListContainer = document.getElementById('pokemon-list');
    pokemonListContainer.innerHTML = '';

    pokemonList.forEach(pokemon => {
        const pokemonCard = document.createElement('div');
        pokemonCard.classList.add('pokemon-card');

        const pokemonImage = document.createElement('img');
        pokemonImage.src = pokemon.image;

        const pokemonName = document.createElement('p');
        pokemonName.textContent = pokemon.name;

        pokemonCard.appendChild(pokemonImage);
        pokemonCard.appendChild(pokemonName);

        pokemonListContainer.appendChild(pokemonCard);

        pokemonCard.addEventListener('click', () => {
            displayPokemonDetails(pokemon);
        });
    });
}

function displayPokemonDetails(pokemon) {
    const pokemonDetailsContainer = document.getElementById('pokemon-details');
    pokemonDetailsContainer.innerHTML = '';

    const pokemonImage = document.createElement('img');
    pokemonImage.src = pokemon.image;

    const pokemonName = document.createElement('h2');
    pokemonName.textContent = pokemon.name;

    const pokemonType = document.createElement('p');
    pokemonType.textContent = `Type: ${pokemon.type}`;

    pokemonDetailsContainer.appendChild(pokemonImage);
    pokemonDetailsContainer.appendChild(pokemonName);
    pokemonDetailsContainer.appendChild(pokemonType);

    pokemonDetailsContainer.style.display = 'block';
}
