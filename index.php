<!DOCTYPE html>
<html>


<head>
	<title>Ganando Puntos</title>
	<link rel="stylesheet" type="text/css" href="estiloindex.css">
</head>


<body>
	<img src="fondo1.png" width="100%" height="75%">

		<div class="banner"> <img src="banner.jpg" width="100%" height="100%">
		</div>


		<div class="introduccion">
			<br><br>

			<center><h2>Bienvenido</h2>
			<form action="index.php" method="POST">

				<label>Ingresa tu nombre</label><br><br>
				<input type="text" name="nombre" required="" class="b2"><br><br>
				<input type="submit" name="boton" value="JUGAR" class="b1">

				</center>

		</div>


			<tr>

		<div class="ranking">

<br><br>
		<center><h3>Mira el Ranking <br>Intenta superarlos</h3>
		NOMBRE          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		PUNTOS
	
			</tr>
</center>

		<?php
		session_start();
		$puntos=0;
		$_SESSION['puntos']=$puntos;
		
		$conexion=new mysqli("bssajwb6gjxmu5ttarjq-mysql.services.clever-cloud.com","udgupmjtgobbyiym","MNrhTM8OecSAqL0tYVQS","bssajwb6gjxmu5ttarjq");
		$sql="SELECT * FROM jugadores ORDER BY Puntos DESC LIMIT 0,3";
		$resultado=$conexion->query($sql);
		

		while ($datos=$resultado->fetch_assoc()) 
		{ 	


		?>
			<tr><br>
<center>
		<th><?php echo $datos['Nombre'];?></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<th><?php echo $datos['Puntos'];?></th>
		<br></center>

			</tr>

		<?php
		}
		?>

		</center>


		</div>

		<div class="pie"><center>
 Melisa Cano Rojas - Federico Londoño Zapata - Samuel Orrego Castrillon</center>

		</div>

		</form><br>

</body>
</html>


<?php

if (isset($_POST['nombre'])) 
{
	$_SESSION['jugador']=$_POST['nombre'];
	header("location:jugar2.php");
}
?>


<style type="text/css">


	.banner
   {    	
   	position: absolute;
	height: 15%;
	width: 96%;
    background-color:white;
	left: 2%;
    top: 2%;
  
  
   }

 	.introduccion
   {    	
   	position: absolute;
	height: 70%;
	width: 47%;
  background:rgba(248,220,186,0.9);
	left: 2%;
    top: 19%;
      border:solid black 3px;
       font: bold 90% monospace;
       font-size: 30px;
       color:#777777;
  
   }

 	.ranking
   {    	
   	position: absolute;
	height: 70%;
	width: 47%;
     background:rgba(178, 212, 240,0.9);
	left: 51%;
    top: 19%;
    border:solid black 3px;
      font: bold 90% monospace;
       font-size: 30px;
       color:#777777;

 }

 	.pie
   {    	
   	position: absolute;
	height: 6%;
	width: 96%;
    background:rgba(227, 102, 102,0.9);
	left: 2%;
    top: 91%;
    border:solid black 3px;
      font: bold 90% monospace;
       font-size: 30px;
       color:#ffffff;

 }

  	.b1
   {   
   	   	 position: absolute;
   left:35%;
   top:60%; 	
width:30%;
height:20%;
   border-radius: 50%;
     font-size: 100%;
 }

   	.b2
   {   
   position: absolute;
   left:35%;
   top:45%; 	
width:30%;
height:10%;

 }




      .b1:hover
   {      
   	 position: absolute;
   left:35%;
   top:60%; 	
width:30%;
height:20%;

  font-size: 140%;
    font-family: bold 90% monospace;
    color:red;
    background-color: #DFCE93;
    border-radius: 50%;
   
   }
