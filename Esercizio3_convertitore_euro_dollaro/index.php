<form action="index.php" method="post">
    <input type="number" name="euro" placeholder="Euro">
    <input type="submit" value="Invia">
</form>

<?php

if (isset($_POST['euro'])) {
    $euro = $_POST['euro'];
    $dollaro = $euro * 1.16;
    echo "Con " . $euro . " euro hai " . $dollaro . " dollari";
}