<?php
	
	include "php/conection.php";
	
	$info = $_GET;
	
	$select = $pdo->query("SELECT * FROM tab_equip WHERE id_equip = '".$info['id']."' ");
	$select = $select->fetchAll();

?>
<!DOCTYPE html>
<html moznomarginboxes mozdisallowselectionprint>
  <head>
    <title>Código de Barras 1.0</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
    
    <meta name="description" content="See this example of responsive three highlights without using javascript. Using only html and css. by Palloi Hofmann">
    <meta name="keywords" content="css4html, css+for+html, css 4 html, css4, css4 html, css, css3, html, html5" />

    <meta property="og:image" content="http://palloi.github.io/responsive-header-only-css/assets/images/image-shared-2.png" />
    <meta property="og:keywords" content="css4html, css+for+html, css 4 html, css4, css4 html, css, css3, html, html5" />
    <meta name="description" content="See this example of responsive three highlights without using javascript. Using only html and css. by Palloi Hofmann">
    
    <style type="text/css" media="print">
    
		@page {
		    size: auto;   /* auto is the initial value */
		    margin: 0;  /* this affects the margin in the printer settings */
		}
		*{
			font-size: 17pt;
		}
		#menu, #corpo, #corpo2{
			display: none;
		}
		
		.content {
		  background: white;
		  box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
		}
		
	</style>
    
    <style>
    	body {
		  background: tomato;
		  text-align: center;
		  justify-content: center;
		  align-items: center;
		  font-size: 16px;
		}
		.button {
		  transform: translate(-50%, 0);
		  font-family: inherit;
		  color: white;
		  background: #FF3838;
		  outline: none;
		  border: none;
		  padding: 5px 15px;
		  font-size: 25pt;
		  font-weight: 400;
		  border-radius: 3px;
		  box-shadow: 0px 0px 10px rgba(51, 51, 51, 0.4);
		  cursor: pointer;
		  transition: all 0.15s ease-in-out;
		  text-decoration: none;
		}
		.content {
		  background: white;
		  width: 500px;
		  min-height: 600px;
		  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7);
		  font-family: lato;
		  color: #333;
		  border-radius: 10px;
		}
    </style>
    
	</head>
	
	<body>
		
		<?php include 'header.php' ?>
		
		<center>
			<br /><br /><br />
			<div class="content">
				<div id="corpo">
					<br />
					<h2>NOME</h2>
					<br />
					<?php echo $select[0]['nome_equip'] ?>
					<br />
					<h2>DESCRIÇÃO</h2>
					<br />
					<?php echo $select[0]['descricao_equip'] ?>
					<br />
					<h2>CÓDIGO DE BARRAS</h2>
					<br />
				</div>
				<div>
					<img src="barras/codigos/<?php echo $select[0]['cod_barras_equip'] ?>.gif" />
				</div>
				<div id="corpo2">
				<h1><a class="button" href="javascript:window.print()">Imprimir Cód. de Barras</a></h1>
				<br />
				</div>
			</div>
        </center>
          
	</body>  
</html>