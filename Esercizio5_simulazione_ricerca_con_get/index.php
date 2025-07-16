<form action="index.php" method="get">
    <input type="text" name="ricerca" placeholder="Cerca">
    <input type="submit" value="Cerca">
</form>

<?php

if (isset($_GET['ricerca'])) {
    echo "Hai cercato: " . $_GET['ricerca'];
}

?>