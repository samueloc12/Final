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
		
	$NN=$_SESSION['N'];

	if (isset($_POST['e1'])) 
	{
		$escogida=$_REQUEST['e1'];
	}
	else
	{
		if (isset($_POST['e2'])) 
		{
		$escogida=$_REQUEST['e2'];
		}
		else
		{
			if (isset($_POST['e3'])) 
		{
		$escogida=$_REQUEST['e3'];
		}
	else
	{
		if (isset($_POST['e4'])) 
	{
		$escogida=$_REQUEST['e4'];
	}
	else
	{
		
	}
	}
	}
	}
	$puntos1=$_SESSION['puntos'];
	$conexion=new mysqli("localhost","root","","tecnologia");
	$sql="SELECT * FROM periodo3final WHERE ID = '$NN'";
	$resultado=$conexion->query($sql);
	$conexion1=$resultado->fetch_assoc();

	if($escogida==$conexion1['Respuesta'])
	{

?>
		<html><center> </html>
			<?php
		echo '<br>';echo '<br>';echo '<br>';
		echo "Correcto";
		$puntos1=$puntos1+10;
			echo '<br>';echo '<br>';echo '<br>';
		echo "Tus puntos son ".$puntos1;
		?>
<html><center> </html>	<?php
	
	}
	else
	{	
?>
		<html><center> </html>
			<?php
				echo "Incorrecto";
					echo '<br>';echo '<br>';
		echo "La respuesta correcta es:". '<br>'.'<br>'.$conexion1['Respuesta'];
	
	
		echo '<br>';echo '<br>';echo '<br>';echo '<br>';



		echo "Tus puntos son ".$puntos1;
?>
<html><center> </html>	<?php
	}


	
	$_SESSION['puntos']=$puntos1;

	if ($puntos1>=500) 
	{
		header("location:ranking.php");
	}

?>

		</div>


			<tr>

		<div class="ranking">

<br><br><br><br><br><br>
	<center>	<a href="jugar2.php" class="b1">Sigue Jugando</a><br><br>
<a href="ranking.php" class="b1">Salir</a></center>
</body>

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
       font-size: 30px;
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