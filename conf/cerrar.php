
<?php session_start ();
If($_SESSION["id_user"]) {
?>
<script lenguage = javascript>
var r = confirm("Estas Seguro de Cerrar Sesion?");
if (r == true) {
alert("Sesion cerrada correctamente ");
	window.location="../index.php";
	<?php session_destroy();  ?>
}if (r == false){

	window.history.back();
}

</script>

<?php }
else { ?>
	<script language =javascript>
	alert("No ha iniciado sesion ");
	window.location="../index.php";
</script>
<?php } ?>
