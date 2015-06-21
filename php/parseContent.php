<?php 
include("../php/Parsedown.php");
$Parsedown = new Parsedown();

$string = $_POST['post'];

echo $Parsedown->text($string);
?>
