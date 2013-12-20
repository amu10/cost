<?php 
	include 'db/TxtDb.php';
	print_r(selectAll());
	deleteData(array('id=8  '));
?>