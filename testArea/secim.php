<!DOCTYPE html>
<!--suppress ALL -->
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:500i" rel="stylesheet">
<style>
    body {
        background: url("img/pokemon/background.jpg") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    h1{
        margin-bottom: 30px;
    }

    h1,h3 {
        font-family: Roboto, sans-serif;
        font-size: 70px;
        color:#FFFFFF;
        text-shadow: 3px 3px 2px #68696b;
    }


    div.pokemon {
        margin-top: 50px;
    }

    select {
        margin-top: 30px;
    }

</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <h1 class="text-center">Bir Pokemon seç</h1>
    <div class="col-md-6 col-md-offset-3">
        <select class="form-control">
            <option value="">pokemonunuzu seçin</option>
            <option value="01">Charmander</option>
            <option value="02">Bulbasaur</option>
            <option value="03">Squirtle</option>
            <option value="04">Pikachu</option>
            <option value="05">Diglett</option>
            <option value="06">Geodude</option>
        </select>
    </div>
    <div class="col-md-10 col-md-offset-1 pokemon text-center">
    </div>
</div>
</body>
<script>
    var selectedPokemon;
    $(document).ready(function () {
        $("select").change(function () {
            selectedPokemon = $(this).find(":selected");
            if (selectedPokemon.val()) {
                $("div.pokemon")
                    .html("<img src=\"img/pokemon/" + selectedPokemon.val() + ".png\" alt=\"\">")
                    .append("<h3>Seni seçiyorum " + selectedPokemon.text() + " !</h3>");
            }
        });

    })

</script>
</html>