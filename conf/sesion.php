<?php include("conexion.php");
if(!isset($_SESSION)){
session_start();
}
@$cedula = $_POST["id"];
  @$pass = $_POST["password"];
  $sql ="select * from usuarios where id ='$cedula'and pass='$pass'";
  $result=mysqli_query($conn, $sql);
  $registro=mysqli_fetch_array($result);
  if(!$registro[0]){
    echo"<script lenguage=javascritpt>
    alert('Incorrecto');
    window.location='../index.php';
    </script>";
  }/*Correcto*/
  else{
     $_SESSION["id_user"]=$registro["id"];
     $_SESSION["id_nombre"]=$registro["nombre"];
     echo"<script lenguage=javascritpt>
     alert('Sesion Iniciada');
      window.location='../home.php';
</script>";
  }
   ?>
