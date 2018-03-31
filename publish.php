<?php
include_once("config.php");
$addno= $_GET['id']; 
mysqli_query($mysqli,"INSERT INTO pubadd(selcttedid) VALUES ('$addno')"); 
?>

