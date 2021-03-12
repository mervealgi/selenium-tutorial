<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet"><?php include 'partials/head.php'; ?>
<style>
    h1 {
        font-family: Lobster two, Arial, serif;
        font-size: 50px;
    }

    body {
        background-image: url("img/pink.png");
        color: whitesmoke;
    }

    button {
        font-size: 24px;
        width: 150px;
        height: 150px;
        text-align: center;
        border: solid 5px whitesmoke;
        border-radius: 50%;
        user-focus: none;
        margin: 100px auto 80px auto;

        display: block;
        background-color: transparent;
        font-weight: 600;
        -webkit-box-shadow: 0 8px 0 #c5376d, 0 15px 20px rgba(0, 0, 0, .35);
        -moz-box-shadow: 0 8px 0 #c5376d, 0 15px 20px rgba(0, 0, 0, .35);
        box-shadow: 0 8px 0 #c5376d, 0 15px 20px rgba(0, 0, 0, .35);
        -webkit-transition: -webkit-box-shadow .1s ease-in-out;
        -moz-transition: -moz-box-shadow .1s ease-in-out;
        -o-transition: -o-box-shadow .1s ease-in-out;
        transition: box-shadow .1s ease-in-out;

    }

    button:focus {
        outline: none;
    }

    button:active {
        -webkit-box-shadow: 0 0 0 #c5376d, 0 0 0 rgba(0, 0, 0, .3);
        -moz-box-shadow: 0 0 0 #c5376d, 0 0 0 rgba(0, 0, 0, .3);
        box-shadow: 0 0 0 #c5376d, 0 0 0 rgba(0, 0, 0, .3);
        -webkit-transform: translate(0, 4px);
        -moz-transform: translate(0, 4px);
        -o-transform: translate(0, 4px);
        transform: translate(0, 4px);
    }

</style>
<body>
<?php include 'partials/navigation.php' ?>

<div class="container">
    <h1 class="text-center">Beni bir kez daha tıkla</h1>
    <div class="row">
        <button id="clickMe">Tıkla bana !</button>
    </div>
    <div class="row text-center">
        <h1 style="font-size: 60px" id="clicks">0</h1>
        <p class="description">tıklama</p>
    </div>
</div>
</body>

<script>
    var clicks = 0;
    $(document).ready(function () {
        $("#clickMe").click(function () {
            $("#clicks").text(++clicks);
            if (clicks == 1) {
                $(".description").text("tık");
            }
            if (clicks == 2 || clicks == 3 || clicks == 4) {
                $(".description").text("tıklama");
            }
            if (clicks > 4) {
                $(".description").text("tıklamalar");
            }
        })
    })
</script>

</html>