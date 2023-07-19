
function pokemonKeyId() {
  let pokemonId = document.pokemonKeySend.pokemonId.value
  pokemonId = (pokemonId <= 1) ? 1 : pokemonId;
  pokemonId = (pokemonId >= 898) ? 898 : pokemonId;
  getPokemon(pokemonId)
}

function getPokemon(id = 1) {  
  typesJson = '{'+
  '"bug": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/bug.svg",'+
  '"dark": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/dark.svg",'+
  '"dragon": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/dragon.svg",'+
  '"electric": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/electric.svg",'+
  '"fairy": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/fairy.svg",'+
  '"fighting": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/fighting.svg",'+
  '"fire": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/fire.svg",'+
  '"flying": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/flying.svg",'+
  '"ghost": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/ghost.svg",'+
  '"grass": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/grass.svg",'+
  '"ground": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/ground.svg",'+
  '"ice": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/ice.svg",'+
  '"normal": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/normal.svg",'+
  '"poison": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/poison.svg",'+
  '"psychic": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/psychic.svg",'+
  '"rock": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/rock.svg",'+
  '"steel": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/steel.svg",'+
  '"water": "https://raw.githubusercontent.com/luizbinario/pokemon-type-icons/main/icons/water.svg"'+
'}'

  let pokemonApi = "https://pokeapi.co/api/v2/pokemon/"+id
  // let XMLHttpRequest = require("xmlhttprequest").XMLHttpRequest;
  let pokemonreq = new XMLHttpRequest();
  let typesreq = new XMLHttpRequest();
  pokemonreq.open("GET", pokemonApi, false)
  pokemonreq.send()
  let pokemonData = JSON.parse(pokemonreq.responseText)
  document.getElementById("pokemonId").value = pokemonData.id
  document.getElementById("name-display").innerHTML = pokemonData.name
  document.getElementById("imgPokemon").src = pokemonData.sprites.front_default
  document.getElementById("pokemonType").innerHTML = ""
  pokemonTypes = JSON.parse(typesJson)                     
  pokemonData.types.map(item => document.getElementById("pokemonType").innerHTML += "<img src="+pokemonTypes[item.type.name]+" height=50>")
}