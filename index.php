<?php
	
	include "php/conection.php";
	$branch = "master";

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
    
    <style>
	
		body {
  background: gray;
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
		  height: 330px;
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
			<br /><br />
			<h1>CÓDIGO DE BARRAS 1.0</h1>
			<br /><br />
			<div class="content">
				<br />
				<h1><a class="button" href="cadastra.php">Cadastrar Produto</a></h1>
				<br />
				<h1><a class="button" href="consulta.php">Consultar Código</a></h1>
				<br />
				<h1><a class="button" href="lista.php">Lista de Produtos</a></h1>
			</div>
		</center>
          
	</body>  
</html>