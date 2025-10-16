<?php
    $pokemons = [
        ["image" => "Charmander.png", "title" => "Charmander", "cards entry" => "#0", "id" => "poke0", "description" => "Charmander, the Fire-type starter Pokémon, is known for the flame on its tail, which burns brighter when it’s happy. It evolves into Charmeleon and then into Charizard."],
        ["image" => "Charmeleon.png", "title" => "Charmeleon", "cards entry" => "#1", "id" => "poke1", "description" => "Charmeleon, the evolved form of Charmander, is fiercer and more aggressive. With a fiery tail, it’s ready to evolve into Charizard."],
        ["image" => "Charizard.png", "title" => "Charizard", "cards entry" => "#2", "id" => "poke2", "description" => "Charizard, the final evolution of Charmander, is a powerful Fire/Flying-type Pokémon. Known for its dragon-like appearance, it can breathe intense flames."],
        ["image" => "Squirtle.png", "title" => "Squirtle", "cards entry" => "#3", "id" => "poke3", "description" => "Squirtle, the Water-type starter, is a playful turtle that can shoot water from its mouth. It evolves into Wartortle and then into Blastoise."],
        ["image" => "Wartortle.png", "title" => "Wartortle", "cards entry" => "#4", "id" => "poke4", "description" => "Wartortle, the evolved form of Squirtle, has a more powerful water-based attack and is known for its swiftness in the water. It evolves into Blastoise."],
        ["image" => "Blastoise.png", "title" => "Blastoise", "cards entry" => "#5", "id" => "poke5", "description" => "Blastoise, the final evolution of Squirtle, is a massive Water-type Pokémon with powerful water cannons mounted on its back."],
        ["image" => "Bulbasaur.png", "title" => "Bulbasaur", "cards entry" => "#6", "id" => "poke6", "description" => "Bulbasaur, the Grass/Poison-type starter, has a plant bulb on its back that grows into a large flower as it evolves into Ivysaur and Venusaur."],
        ["image" => "Ivysaur.png", "title" => "Ivysaur", "cards entry" => "#7", "id" => "poke7", "description" => "Ivysaur, the evolved form of Bulbasaur, has a blooming flower on its back and can use powerful Grass-type moves. It evolves into Venusaur."],
        ["image" => "Venusaur.png", "title" => "Venusaur", "cards entry" => "#8", "id" => "poke8", "description" => "Venusaur, the final evolution of Bulbasaur, has a giant flower on its back that can release toxic spores. It is a powerful Grass/Poison-type Pokémon."]
    ];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cards with PHP</title>

        <style>
            .card-text{
                overflow-y:auto;
            }
        </style>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
     rel="stylesheet" 
     integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
     crossorigin="anonymous">
    </head>

    <body>
    <h1 class="text-center">Pokemon Starters | Cards w/PHP</h1>
    
    <?php foreach($pokemons as $tempMon):?>
     <div class="col-md-4 mb-4">
        <div class="card " >
            <img src= "<?=$tempMon['image']?>">
            <div class="card-body">
                <h5 class="card-title"> <?=$tempMon['title']?> </h5>
                <p class="card-text"> <?=$tempMon['description'] ?> </p>
            </div>
        </div>
    </div>    
    <?php endforeach; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
    </body>
</html>