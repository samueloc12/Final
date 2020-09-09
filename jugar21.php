<!DOCTYPE html>
<html>
<head>
	<title>¿Quién Quiere Ser Millonario?</title>
</head>
<body><center>
	<?php
	
		session_start();
		
		$usuario=$_SESSION['jugador'];
		$numero=rand(1,50);
		$_SESSION['N']=$numero;
		echo $usuario;
		

		$conexion=new mysqli("localhost","root","","tecnologia");
		$sql="SELECT * FROM periodo3final WHERE ID = '$numero'";
		$resultado=$conexion->query($sql);
		

		while($conexion1=$resultado->fetch_assoc())
		{

		$Pregunta=$conexion1['Pregunta'];
		$OpcionA=$conexion1['OpcionA'];
		$OpcionB=$conexion1['OpcionB'];
		$OpcionC=$conexion1['OpcionC'];
		$OpcionD=$conexion1['OpcionD'];
		

	
		echo $Pregunta;
		?>
		<form action="opcion.php" method="POST"><br>
		<input type="submit" name="e1" placeholder="<?php echo $OpcionA; ?>" value="<?php echo $OpcionA; ?>">
		<input type="submit" name="e2" placeholder="<?php echo $OpcionB; ?>" value="<?php echo $OpcionB; ?>">
		<input type="submit" name="e3" placeholder="<?php echo $OpcionC; ?>" value="<?php echo $OpcionC; ?>">
		<input type="submit" name="e4" placeholder="<?php echo $OpcionD; ?>" value="<?php echo $OpcionD; ?>">
		
		</form>
		<?php		
	}
		
	?>
	


	
</center>
</body>
</html>