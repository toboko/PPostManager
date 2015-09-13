<?php
include_once("setup.php");

//Escape method for query
function escape_ch($post) {
	$post = str_replace("'", "''", $post);
	return $post;
}
//Method to prevent injection on tables values
function tab_check($var) {
	foreach (system::$all_tabs as $tab) {
		if ($var == $tab) return $var;
	}
	return NULL;
}
//Connection on db with PDO
try{
	$dbh = new PDO("mysql:host=$host;dbname=$db_name","$db_user","$db_psw");
	} catch (PDOException $e) {
	echo "Failed to get DB handle: " . $e->getMessage() . "\n";
	exit;
}
