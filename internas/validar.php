<?php
include("../dll/config.php");
include("../dll/mysql.php");

 //extract($_POST);
 $nombre=$_POST['nombre'];
 $apellidos=$_POST['apellidos'];
 $correo=$_POST['correo'];
 $rol=$_POST['rol'];
 $clave=$_POST['clave'];
 $dni=$_POST['dni'];

 $clave=md5($clave);


 $sql = "insert into usuarios values ('','$nombre','$apellidos','$correo','$dni','$rol','$clave')";
 $result = mysqli_query($conn,$sql);

    if($result){
        echo "Regsitro guardado";
        
    }
    mysqli_close($conn);
    echo '<script>alert("Datos Guardados")</script>';
    echo "<script>location.href='registros.php'</script>";



?>