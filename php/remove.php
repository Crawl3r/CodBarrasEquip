<?php

	require_once('../barras/barcode.inc.php');
	include "conection.php"; 

	
	$info = $_POST;

	$select = $pdo->query("DELETE FROM tab_equip WHERE id_equip = '".$info['id']."' ");
	
	header("location: ../lista.php");
		
	
?>
