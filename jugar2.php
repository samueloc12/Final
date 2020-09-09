<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
	<title>Ganando Puntos</title>
  <link rel="stylesheet" type="text/css" href="estiloindex.css">
</head>
	</head>
	<body >
    <img src="fondo1.png" width="100%" height="97%">

<div class="banner"><img src="banner.jpg" width="100%" height="100%"></div>


	<div class="pregunta"><center><h2>
   
  <?php
  
    session_start();
    
    $usuario=$_SESSION['jugador'];
    $numero=rand(1,50);
    $_SESSION['N']=$numero;
    echo "Usuario   ".$usuario;


echo '<br>';echo '<br>';

ECHO "De acuerdo con la siguiente pregunta, Responda:";
echo '<br>';echo '<br>';

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

  </h2></center></div>
<form action="opcion.php" method="POST"><br>

    <div class="opcion1"><input type="submit" class="b1"  name="e1" placeholder="<?php echo $OpcionA; ?>" value="<?php echo $OpcionA; ?>" style='width:100%; height:100%' ></div>


    	<div class="opcion2"><input type="submit" class="b1" name="e2" placeholder="<?php echo $OpcionB; ?>" value="<?php echo $OpcionB; ?>"style='width:100%; height:100%'></div>


    		<div class="opcion3"><input type="submit" class="b1" name="e3" placeholder="<?php echo $OpcionC; ?>" value="<?php echo $OpcionC; ?>"style='width:100%; height:100%'></div>


    			<div class="opcion4">   <input type="submit" class="b1" name="e4" placeholder="<?php echo $OpcionD; ?>" value="<?php echo $OpcionD; ?>"style='width:100%; height:100%'>
    </div>
    			
</form>
    <?php   
  }
    
  ?>
  
    	
    

<div class="creditos"><img src="pie.jpg"></div>
   
</div>


	</body>
	</html>


 <style type="text/css">



 	.banner
   {    	
   	position: absolute;
	height: 24.5%;
	width: 96%;
    background-color:white;
	left: 2%;
    top: 2%;
     
  
   }

 	.pregunta
   {    	
   	position: absolute;
	height: 24.5%;
	width: 96%;
    background-color:F3F1D7;
	left: 2%;
    top: 28.5%;
    border:solid black 3px;
    font: bold 90% monospace;
       font-size: 110%;
       color:#993535;

 }

   .opcion1
   {    	
   	position: absolute;
	height: 18%;
	width: 47%;
    background-color:C1CFF1;
	left: 2%;
    top: 55%;
    border:solid black 3px;
  
    
   }

   .opcion2
   {    	
   	position: absolute;
		height: 18%;
	width: 47%;
   background-color:F3F1D7;
	left: 51%;
    top: 55%;
    border:solid black 3px;
   }

    .opcion3
   {    	
   	position:absolute;
	height: 18%;
	width: 47%;
	left: 2%;
    top: 75%;
  background-color:F3F1D7;
     border:solid black 3px;
   }


   .opcion4
   {    	
   	position: absolute;
		height: 18%;
	width: 47%;
    background-color:C1CFF1;
	left: 51%;
    top: 75%;
    border:solid black 3px;
   
   }


   .b1
   {      
  font-size: 200%;
    font-family: bold 90% monospace;
    color:#516A9C;
  
   
   }

      .b1:hover
   {      
  font-size: 250%;
    font-family: bold 90% monospace;
    color:red;
    background-color: #DFCE93;
   
   }


 

     .creditos
   {    	
   	position: absolute;
	height: 3%;
	width: 96%;
      background-color:F3F1D7;
	left: 2%;
    top: 95%;
 
   
   }

