<?php
session_start();

echo $_SESSION["nom"] . "<br>";
echo $_SESSION["prenom"] . "<br>";
echo $_SESSION["age"] . "<br>";

?>