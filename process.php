<?php

if (array_key_exists('check_submit', $_POST)) {
	if ( isset($_POST['name']) ) {
		$_POST['name'] = implode(', ', $_POST['name']);
	}
}

?>