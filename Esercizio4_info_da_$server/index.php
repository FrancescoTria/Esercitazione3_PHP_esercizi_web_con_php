<form action="index.php" method="post">
    <p>Alcuni dati da $_server</p>
    <input type="submit" value="Invia">
</form>

<?php

echo "<p>Indirizzo IP: " . $_SERVER['REMOTE_ADDR'] . "</p>";
echo "<p>User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
echo "<p>Nome file: " . $_SERVER['SCRIPT_NAME'] . "</p>";
echo "<p>Nome del server: " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p>Protocollo: " . $_SERVER['SERVER_PROTOCOL'] . "</p>";
echo "<p>Porta: " . $_SERVER['SERVER_PORT'] . "</p>";

?>