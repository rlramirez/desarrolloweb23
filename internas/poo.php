<?php
	
	include("../dll/config.php");
	include("../dll/class_mysql.php");
	
	$miconexion = new class_mysqli;
	$miconexion->conectar($servername, $username, $password, $database);


	//$sql = "insert into usuarios values ('','Juan','Carrion','jcarrion@gmail.com','111111','admin','999')";
	//$sql = "delete from usuarios where id= 13";
	//$clave=md5('999');
	//$sql="update usuarios set clave='$clave' where id=14";

	$sql="select clave from usuarios where id=12";
	$res=$miconexion->consulta($sql);
	$miconexion->verconsulta();



	/*if ($res) {
		echo "la sentencia se ha ejecutado correctamente";
	}else{
		echo "Hay un error de sql";
	}*/
?>