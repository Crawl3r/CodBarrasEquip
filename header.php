<head>
	<style>
		/* MENUUUUUUUUUUUUUU */

		#menu {
		    list-style:none;
		    width:940px;
		    margin:30px auto 0px auto;
		    height:43px;
		    padding:0px 20px 0px 20px;
		 
		    /* Rounded Corners */
		     
		    -moz-border-radius: 10px;
		    -webkit-border-radius: 10px;
		    border-radius: 10px;
		 
		    /* Background color and gradients */
		     
		    background: #014464;
		    background: -moz-linear-gradient(top, #ff3838, #ff3838);
		    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ff3838), to(#ff3838));
		     
		    /* Borders */
		     
		    border: 0px solid #002232;
		 
		    -moz-box-shadow:inset 0px 0px 1px #edf9ff;
		    -webkit-box-shadow:inset 0px 0px 1px #edf9ff;
		    box-shadow:inset 0px 0px 1px #edf9ff;
		}
		 
		#menu li {
		    float:left;
		    display:block;
		    text-align:center;
		    position:relative;
		    padding: 4px 10px 4px 10px;
		    margin-right:30px;
		    margin-top:7px;
		    border:none;
		}
		 
		#menu li:hover {
		    border: 1px solid #777777;
		    padding: 4px 9px 4px 9px;
		     
		    /* Background color and gradients */
		     
		    background: #F4F4F4;
		    background: -moz-linear-gradient(top, #F4F4F4, #EEEEEE);
		    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#F4F4F4), to(#EEEEEE));
		     
		    /* Rounded corners */
		     
		    -moz-border-radius: 5px 5px 5px 5px;
		    -webkit-border-radius: 5px 5px 5px 5px;
		    border-radius: 5px 5px 5px 5px;
		    border:none;
		}
		 
		#menu li a {
		    font-family:Arial, Helvetica, sans-serif;
		    font-size:14px; 
		    color: #EEEEEE;
		    display:block;
		    outline:0;
		    text-decoration:none;
		}
		 
		#menu li:hover a {
		    color:#161616;
		    text-shadow: 1px 1px 1px #FFFFFF;
		}
		#menu li .drop {
		    padding-right:21px;
		    background:url("img/drop.png") no-repeat right 8px;
		}
		#menu li:hover .drop {
		    background:url("img/drop.png") no-repeat right 7px;
		}

	</style>
</head>
<body>
	<header>
		<nav>
			<ul id="menu">
				<li>
				    <li><a href="index.php">Home</a></li>
				    <li><a href="cadastra.php" class="drop">Cadastrar Produto</a></li>
				    <li><a href="consulta.php" class="drop">Consultar Produto</a></li>
				    <li><a href="lista.php" class="drop">Lista</a></li>
				</li>
			</ul>
		</nav>
	</header>
</body>




