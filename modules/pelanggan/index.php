<?php
	$aksi = $_GET['aksi'];
		switch ($aksi) {
			case 'add':
				include "add.php";
				break;

			case 'delete':
				include "delete.php";
				break;	
			
			case 'edit':
				include "edit.php";
				break;
				
			default:
				include "list.php";
				break;
		}
?>