<?php
$navigation = [
    "tikla bana",
    "secim",
    "tablo",
    "kirmizi uyari",
    "eğlenceli",
    "hesap makinesi",
    "xpath training center",
    "kadin veya erkek",
    "kayit",
    "beni hareket ettir",
    "stroop effect",
    "nemenne",
    "isiklar",
    ];
$current_page = basename($_SERVER['REQUEST_URI'], ".php");

function makeLink($link)
{
    return strtolower(str_replace(" ", "", $link));
}

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Gyuhay</a>
        </div>
        <ul class="nav navbar-nav">
            <?php foreach ($navigation as $navigationItem) {
                echo "<li ";
                if (makeLink($navigationItem) == $current_page) {
                    echo "class='active'";
                }
                echo ">";
                echo "<a href =" . makeLink($navigationItem) . ".php>";
                echo ucfirst($navigationItem);
                echo "</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
</nav>