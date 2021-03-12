<?php
$rows = rand(1, 100);
$name = ["Osman", "Ali", "Veysel", "Emre", "Celalettin", "Yılmaz", "Ömer", "Sunay", "Yasin"];
$surname = ["Koç", "Küçükbey", "Kerim", "Alişoğlu", "Vatan", "Güney", "Akan", "Sunal", "Akçatepe"];

function getRandomNumber()
{
    return rand(100000, 999999);
}

?>
<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
<style>
    body {
        background-color: #EEEFF7;
    }

    * {
        color: #31353D;
    }

    button {
        background-color: #92CDCF;
    }

    h1 {
        font-family: Montserrat, serif;
        font-size: 50px;
    }

</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <h1 class="text-center">Değişken bir tablo</h1>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
            <th>Id</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Numara</th>
            </thead>
            <tbody>
            <?php for ($i = 1; $i < $rows + 1; $i++) {
                echo "<tr>";
                echo "<td>";
                echo $i;
                echo "</td>";
                echo "<td>";
                echo $name[array_rand($name)];
                echo "</td>";
                echo "<td>";
                echo $surname[array_rand($surname)];
                echo "</td>";
                echo "<td>";
                echo getRandomNumber();
                echo "</td>";
                echo "</tr>";
            } ?>
            </tbody>
        </table>
    </div>
</body>
</html>