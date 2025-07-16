<form action="index.php" method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="cognome" placeholder="Cognome">
    <input type="submit" value="Invia">
</form>

<?php

if (isset($_POST['nome']) && isset($_POST['cognome'])) {
    echo "Ciao " . $_POST['nome'] . " " . $_POST['cognome'];
}

?>