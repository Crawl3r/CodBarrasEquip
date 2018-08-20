<?php

	require_once('../barras/barcode.inc.php');
	include "conection.php"; 

		
	$code_number = "7".rand(100000,999999).rand(100000000,999999999) ;
	new barCodeGenrator($code_number,1,'../barras/codigos/'.$code_number.'.gif', 190, 130, true);
	
	$info = $_POST;

	try{
		$select = $pdo->prepare("
		INSERT INTO tab_equip 
		(
			nome_equip,
			descricao_equip,
			cod_barras_equip
		)
		VALUES
		(
			?,?,?
		)
		");
		
		$select->bindParam(1, $info['nome'], PDO::PARAM_INT );
		$select->bindParam(2, $info['descricao'], PDO::PARAM_INT );
		$select->bindParam(3, $code_number, PDO::PARAM_INT );
		
		$select->execute();
	
	}catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
    	die();
	}
	
	
	header("location: ../lista.php");	
	
?>
