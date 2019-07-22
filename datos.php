<?php
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=usuarios.xls');

include("conf/verificar.php");
include("conf/conexion.php");

$query="SELECT * FROM pedidos";
	$result=mysqli_query($conn, $query);
 ?>
 <table border="1">
 	<tr style="background-color:red;">
 		<th>Nombre</th>
 		<th>Telefono</th>
 		<th>Cedula</th>
 		<th>Retirar</th>
 		<th>Direccion</th>
    <th>Pedido</th>
    <th>Numero de Pedido</th>
    <th>Total a Pagar</th>

 	</tr>
 	<?php
 		while ($row=mysqli_fetch_assoc($result)) {
 			?>
 				<tr>
 					<td><?php echo $row['nombre']; ?></td>
 					<td><?php echo $row['telefono']; ?></td>
 					<td><?php echo $row['cedula']; ?></td>
 					<td><?php echo $row['retirar']; ?></td>
 					<td><?php echo $row['direccion']; ?></td>
          <td><?php echo $row['pedido']; ?></td>
          <td><?php echo $row['npedido']; ?></td>
          <td><?php echo $row['cuenta']; ?></td>
 				</tr>

 			<?php
 		}
 	?>
 </table>
