<?php
include("../common/config.php");

$string = '';
$tab		= tab_check($_POST['table']);
$title	= "%".$_POST['title']."%";

if ($tab != "") {
	if ($title == "") {
		$query = "SELECT * FROM $tab ORDER BY id DESC";

		$sth = $dbh->prepare($query);
		$sth->execute();
		$row = $sth->fetch();
		if($row){
			do {
				$string .= '
				<a href="#'.$row['title'].'" class="list-group-item" onclick="postUpdate('.$row['id'].')">
					<h4 class="list-group-item-heading">'.$row['title'].'</h4>
					<p class="list-group-item-text">'.substr($row['post'], 0, 100).'...</p>
				</a>';
			} while ($row = $sth->fetch());
		}
	}
	else {
		$query = "SELECT * FROM $tab WHERE title LIKE :title ORDER BY id DESC";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':title', $title);
		$sth->execute();
		$row = $sth->fetch();
		if($row){
			do {
				$string .= '
				<a href="#'.$row['title'].'" class="list-group-item" onclick="postUpdate('.$row['id'].')">
					<h4 class="list-group-item-heading">'.$row['title'].'</h4>
					<p class="list-group-item-text">'.substr($row['post'], 0, 100).'...</p>
				</a>';
			} while ($row = $sth->fetch());
		}
	}
}
echo $string;
