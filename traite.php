<?php
$mesPrefs = $_POST;
$newPrefs = serialize($mesPrefs);
setcookie("mesPrefs", $newPrefs, time() + (86400 * 30), "/");
header("Location: user.php");
