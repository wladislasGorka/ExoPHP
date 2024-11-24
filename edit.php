<?php
// setcookie("animal",$_POST["animal"], time() + (86400 * 30), "/");
// setcookie("couleur",$_POST["couleur"], time() + (86400 * 30), "/");
// echo "Animal : " . $_COOKIE["animal"] . "<br>";
// echo "Couleur : " . $_COOKIE["couleur"] . "<br>";
?>

<p>Formulaire Edit animal</p>
<form method='POST' name='mesPrefs' action='traite.php'>
    <input type='text' name='animal' placeholder='animal'>
    <input type='text' name='couleur' placeholder='couleur'>
    <input type='submit' value='valider'>
</form>

<!-- <a href='preferences.php'>vers pref</a> -->

<!-- <p>Formulaire user</p>
<form method='POST' name='mesPrefs' action='traite.php'> -->