<?php
include ("../conf/verificar.php");
include ("../conf/conexion.php");

  $name = $_POST["name"];
  $telefono = $_POST["telefono"];
  $cedula = $_POST["cedula"];
  $retirar = $_POST["retirar"];
  $direccion = $_POST["direccion"];
  $pedido = $_POST["pedido"];
  echo"$pedido";
$sql = "INSERT INTO pedidos Values('$name','$telefono','$cedula','$retirar','$direccion','$pedido','0');";
$resp=mysqli_query($conn, $sql) or die (mysql_error());
if($resp = true){?>
	<script language =javascript>
	alert("Pedido Creado ");
  window.history.back();

</script>
<?php}else{?>
	<script language =javascript>
	alert("Pedido No Creado ");
</script>
<?php
}


 ?>
