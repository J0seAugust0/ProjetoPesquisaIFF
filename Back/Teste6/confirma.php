<?php
	$h = htmlspecialchars(addslashes($_GET['h']));
	if (!empty($h) ) {
		echo $h;
}

?>
