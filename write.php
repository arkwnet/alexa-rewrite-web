<?php
file_put_contents("rewrite.txt", $_POST["data"]);
header("location: index.php");
?>