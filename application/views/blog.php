<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenido a mi Blog</title>
	<link rel="stylesheet" type="text/css" href="css/estiloblog.css">
	
</head>
<body>

<h1><strong>Bienvenidos a mi Blog<strong/></h1>
	<h2>Tecnologías</h2>


	<div id="sidebar" style="float: right; border:1px solid #A4A4A4; width: 200px; height: 500px; ">
		<div>
			<?php
			foreach ($dato as $item ):
			?>
			<h2><?php echo $item->datos;?></h2>
			<?php
			endforeach;
			?>	
			<div id="betico">
				
			</div>
	</div>

		<p class="footer">All Rights Reserved</p>
	</div>

</body>
</html>