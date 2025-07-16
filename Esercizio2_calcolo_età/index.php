<form action="index.php" method="post">
    <input type="number" name="anno" placeholder="Anno di nascita">
    <input type="submit" value="Invia">
</form>

<?php

if (isset($_POST['anno'])) {
    $anno = $_POST['anno'];
    $eta = date('Y') - $anno;
    echo "Hai " . $eta . " anni";
}