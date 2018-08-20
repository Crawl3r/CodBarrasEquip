<?php

	require_once('../barras/barcode.inc.php');
	include "conection.php"; 

	
	$info = $_POST;

	$select = $pdo->query("SELECT * FROM tab_equip WHERE cod_barras_equip = '".$info['cod']."' ");
	$select = $select->fetchAll();
	
	if($select == array()){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
	    window.alert('Código não existente!')
	    window.location.href='../consulta.php';
	    </SCRIPT>");
	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
	    window.location.href='../view_prod.php?id=".$select[0]['id_equip']."';
	    </SCRIPT>");
	}
		
	
?>
