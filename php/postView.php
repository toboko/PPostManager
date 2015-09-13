<?php
include("../common/config.php");

$string = '';
$tab = tab_check($_POST['table']);

$query = "SELECT * FROM $tab ORDER BY id DESC";
$sth = $dbh->prepare($query);
$sth->execute();

$row = $sth->fetch();
if($row){
	do {
		$string .= '
				<a class="list-group-item" onclick="postUpdate('.$row['id'].')">
				<h4 class="list-group-item-heading">'.$row['title'].'</h4>
				<p class="list-group-item-text">'.substr($row['post'], 0, 100).'...</p>
				</a>';
	} while ($row = $sth->fetch());
}
else {
	echo '<a class="list-group-item">
				<h4 class="list-group-item-heading">No Contents</h4>
				<p class="list-group-item-text">No contents</p>
				</a>';
}

echo $string;
?>
