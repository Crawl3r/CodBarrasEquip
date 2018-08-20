<?php
	
	include "php/conection.php";

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
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
	</head>
	
	<body>
		
		<?php include 'header.php' ?>
		<br /><br /><br />
		<center>
			<form style="height: 200px" method="post" action="php/consulta.php">
				
				<label>Código de Barras: </label>
				<br />
				<input autofocus type="text" name="cod" />
				<br />
				<button style="position: absolute" type="submit">Pesquisa</button>
			
				
			</form>
		</center>
          
	</body>  
</html>