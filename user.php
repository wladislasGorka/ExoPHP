<?php
session_start();
if($_SESSION["nom"] == "" || $_SESSION["isLogIn"] != true){
    die("vérification a échoué");
}

echo "Bienvenue " . $_SESSION["nom"] ."<br><br>";

if(isset($_COOKIE["mesPrefs"])){
    $mesPrefs = unserialize($_COOKIE["mesPrefs"]);
    echo "Mes préférences:<br>Animal : " . $mesPrefs['animal'] . "<br>Couleur : " . $mesPrefs['couleur'] ."<br><br>";
    echo "<a href='edit.php'><br>éditer</a>";
    echo "<a href='logout.php'><br>quitter</a>";
}else{
    echo "Pas de préférences.<br><br>";
    echo "<a href='edit.php'>Ajouter préférences</a>";
    echo "<a href='logout.php'><br>quitter</a>";
}