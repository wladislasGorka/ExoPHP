<?php

setcookie("mesPrefs","", time() -3600,"/");

session_start();
session_unset();
session_destroy();

echo '<meta http-equiv="refresh" content="5;url=login.php">';
echo "<a href='login.php'>Login</a>";