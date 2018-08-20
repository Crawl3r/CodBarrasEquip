<?php
	
	include "php/conection.php";
	
	$select = $pdo->query("SELECT * FROM tab_equip");
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
    
    <link rel="stylesheet" type="text/css" href="js/tema/style.css" />
    <script type="text/javascript" src="js/tabela/jquery-latest.js"></script>
    <script type="text/javascript" src="js/tabela/jquery.tablesorter.js"></script> 
    
	<script>
		$(document).ready(function() 
		    { 
		        $("#lista").tablesorter();
		        //$("#lista").tablesorter( {sortList: [[0,0]]} );
		    } 
		);
	</script>
    
    <!-- AJUSTA A IMPRESSÃO -->
    <style type="text/css" media="print">
		@page {
		    size: auto;   /* auto is the initial value */
		    margin: 0;  /* this affects the margin in the printer settings */
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
		  font-size: 20pt;
		  font-weight: 400;
		  border-radius: 3px;
		  box-shadow: 0px 0px 10px rgba(51, 51, 51, 0.4);
		  cursor: pointer;
		  transition: all 0.15s ease-in-out;
		  text-decoration: none;
		}
		.content {
		  background: white;
		  width: 700px;
		  min-height: 500px;
		  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7);
		  font-family: lato;
		  color: #333;
		  border-radius: 10px;
		}
		table {
			
		}
    </style>
    
	</head>
	
	<body>
		
		<?php include 'header.php' ?>
		
		<center>
			<br /><br /><br />
			<div class="content">
				<br />
				<table id="lista" class="tablesorter" style="width: 600px">
					<thead>
						<tr>
							<th>
								Nome
							</th>
							<th>
								Descricao
							</th>
							<th style="width: 100px">
								cod. Barras
							</th>
							<td colspan="2">
								
							</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($select as $key) { ?>
							<tr>
								<td>
									<?php echo substr($key['nome_equip'],0,20)."..." ?>
								</td>
								<td>
									<?php echo substr($key['descricao_equip'],0,20)."..." ?>
								</td>
								<td>
									<?php echo $key['cod_barras_equip'] ?>
								</td>
								<td style="width: 80px">
									<form action="view_prod.php" method="get">
			    						<input type="hidden" name="id" value="<?php echo $key['id_equip'] ?>" />
			    						<button type="submit">Vizualizar</button>
			    					</form>
								</td>
								<td style="width: 80px">
									<form action="php/remove.php" method="post" onsubmit="return confirm('Realmente deseja remover o item?');">
			    						<input type="hidden" name="id" value="<?php echo $key['id_equip'] ?>" />
			    						<button type="submit">Remover</button>
			    					</form>
								</td>
							</tr>
						<?php } ?>
					</tbody>
					
				</table>
			</div>
		</center>
          
	</body>  
</html>