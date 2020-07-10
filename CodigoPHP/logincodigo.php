<?php ob_start();
include"conexion.php";
$user=$_POST['MATRICULA'];
$pass=$_POST['CONTRASEÑA']; 
$consulta=$conexion->query("SELECT * FROM login WHERE  MATRICULA='$user' &&  CONTRASEÑA='$pass' && rol_idrol");
$_SESSION=mysqli_fetch_array($consulta);
if($_SESSION['rol_idrol']==1){
        ob_start();
    header("location:paginaprincipal.php");
}elseif($_SESSION['rol_idrol']==2){
    ob_start();
	header("location:paginaprincipal.php");
}elseif ($_SESSION['rol_idrol']==3){
}elseif($_SESSION['rol_idrol']==4){
}elseif($_SESSION['rol_idrol']==5){
}elseif (!$_SESSION['rol_idrol']) {
	echo '<script>alert("Usuario no registrado.")</script>';
}
ob_end_flush();
?>
