<?php

/**
 * class mysqli de desarrollo web
 */
class class_mysqli {
	// varialbes de conección
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;

	// variables de control deerrores
	var $Errno=0;
	var $Error="";

	//identificacion de consultas y conect
	var $Conexion_ID=0;
	var $Consulta_ID=0;

	//constructor 
	function class_mysqli($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;

	}

	// function to connect db
	function conectar($host, $user, $pass, $db){
		if ($db != "") $this->BaseDatos=$db;
		if ($host != "") $this->Servidor=$host;
		if ($user != "") $this->Usuario=$user;
		if ($pass != "") $this->Clave=$pass;

		$this->Conexion_ID = new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);

		if (!$this->Conexion_ID) {
			$this->Error="Ha fallado la conexion";
			return 0;
		}
		return $this->Conexion_ID;
	}

	//funtion query
	function consulta($sql=""){

		if ($sql=="") {
			$this->Error="No hay ninguna sentencia SQL";
			return 0;
		}

		$this->Consulta_ID= mysqli_query($this->Conexion_ID, $sql);
		if (!$this->Consulta_ID) {
			echo $this->Conexion_ID->error;
		}
		return $this->Consulta_ID;
	}

	//retorna el num de campos de la sonsulta
	function numcampos(){
		return mysqli_num_fields($this->Consulta_ID);
	}

	//retorna el numero de registros de la consulta
	function numregistros(){
		return mysqli_num_rows($this->Consulta_ID);
	}

	//ver cunsulta en una tabla
	function verconsulta(){
		echo "<table border = 1 >";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos(); $i++) { 
			echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		echo "</tr>";
		while($row=mysqli_fetch_array($this->Consulta_ID)){
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".$row[$i]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

}

?>