<?php
	$d = dir(".");
	//echo "Path: " . $d->path . "\n";
	$blacklist = array('.', '..','.git','README.md','index.php');
	
	echo "<ul>";
	while (false !== ($entry = $d->read())) {
		if(!in_array($entry, $blacklist)){
			echo "<li><a href='{$entry}'>{$entry}</a></li>";
		}
	}
	echo "</ul>";
	$d->close();
?>
