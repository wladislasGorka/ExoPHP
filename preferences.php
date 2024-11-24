<?php
setcookie("animal",$_POST["animal"], time() + (86400 * 30), "/");
setcookie("couleur",$_POST["couleur"], time() + (86400 * 30), "/");
echo "<br>";
echo "Animal : " . $_COOKIE["animal"] . "<br>";
echo "Couleur : " . $_COOKIE["couleur"] . "<br>";
?>

<a href='edit.php'>vers edit</a>



