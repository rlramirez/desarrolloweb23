<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atractivos Turisticos</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
<header class="cabeceraPrincipal" id="inicio">
	<section class="logo">
		<img src="../images/logotipo.png" title="Logotipo de Atractivos turisticos">
	</section>
	<section class="buscador">
		<input type="text" placeholder="Buscar...">
	</section>
</header>
<nav class="menuPrincipal">
	<a href="../index.html">Inicio</a>
	<a href="../index.html#atractivos">Atractivos</a>
	<a href="">Gastronomía</a>
	<a href="">Cultura</a>
	<a href="../index.html#hoteles">Hoteles</a>
	<a href="registros.php">Listados</a>
	<a href="../index.html#contactos">Contactos</a>
</nav>

<section class="contenedor">
	<div class="espacio"></div>
	<h2 class="titulosH2" id="atractivos">LISTADO DE REGISTROS DE USUARIOS</h2>
	<?php
		include("../dll/config.php");
		include("../dll/mysql.php");

		$sql = "select * from usuarios";
 		$result = mysqli_query($conn,$sql);
	    if($result){
	        echo "<table border=1>";
	        echo "<tr>";
	        echo "<td>ID</td>";
	        echo "<td>Nombres</td>";
	        echo "<td>Apellidos</td>";
	        echo "<td>Correo</td>";
	        echo "<td>Cédula</td>";
	        echo "<td>Rol</td>";
	        echo "</tr>";
	        while($row = mysqli_fetch_array($result)){
	           // $name = $row[1];
	            //echo "Nombre: ".$name."<br/>";
	            echo "<tr>";
	            for ($i=0; $i < 6; $i++) { 
	                //echo "<td>".utf8_encode($row[$i])."</td>";
	                echo " <td> ".$row[$i]."</td>";
	            }
	            echo "<tr>";
	        }
	        echo "</table>";
	    }



    mysqli_close($conn);


	?>
	
</section>
<div class="espacio"></div>

<footer class="piePagina" id="contactos">
	<section> 
		<img src="../images/logotipo2.png">
		<p>Derechos Reservados 2023</p>
	</section>
	<section>
		<ul>
			<li><a href="#inicio">Inicio</a></li>
			<li><a href="#atractivos">Atractivos</a></li>
			<li><a href="">Gastronomía</a></li>
			<li><a href="">Cultura</a></li>
			<li><a href="#hoteles">Hoteles</a></li>
			<li><a href="#contactos">Contactos</a></li>
		</ul>
	</section>
	<section>
		<p>992348067<br>
			0991623447<br>
			mailto:info@sabirm.com<br>
			Loja - Ecuador</p>
	</section>
</footer>
</body>
</html>