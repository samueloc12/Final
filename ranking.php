
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<img src="fondo1.png" width="100%" height="100%">
	<div class="banner"> <img src="banner.jpg" width="100%" height="100%">
		</div>

		<div class="introduccion">
			<br><br>
<?php
	
	session_start();
	
	$usuario=$_SESSION['jugador'];
	$puntos=$_SESSION['puntos'];
	$conexion=new mysqli("localhost","root","","tecnologia");
	$sql="INSERT INTO jugadores VALUES ('$usuario','$puntos')";
	$resultado=$conexion->query($sql);
		    


?>
		<html><center><br> </html>
			<?php
	echo $usuario.", hiciste ".'<br>'.'<br>'.$puntos." puntos";
?>
<html><center> </html>	<?php

?>		

		</div>


			<tr>

		<div class="ranking">

<br><br><br><br><br><br><br>
	<center>	<a href="index.php" class="b1">Jugar de Nuevo</a>

		</div>

		<div class="pie"><center>
 Melisa Cano Rojas - Federico Londoño Zapata - Samuel Orrego Castrillon</center>

		</div>

		</form><br>

	


</html>


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
       font-size: 400%;
       color:#777777;
         text-decoration: none;
  
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
         text-decoration: none;

 }

 	.pie
   {    	
   	position: absolute;
	height: 7%;
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
 text-decoration: none;

 }