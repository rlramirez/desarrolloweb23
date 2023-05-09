<?php
 //extract($_POST);
 $correo=$_POST['correo'];
 $nombre=$_POST['nombre'];
 $pais=$_POST['pais'];
 $estadoCivil=$_POST['estadoCivil'];
 $hoteles=$_POST['hoteles'];
 $gastronomia=$_POST['gastronomia'];
 $medioAmbiente=$_POST['medioAmbiente'];
 echo $correo;
 echo "<br>";
 echo $nombre;
 echo "<br>";
 echo $pais;
 echo "<br>";
 echo $estadoCivil;
 echo "<br>";
 echo "Area de interes: ";
 echo $hoteles." - ".$gastronomia." - ".$medioAmbiente;
?>