<?php
session_start();  
require("SQL.php");

$queEmp = "SELECT *
FROM `usr_usuarios`
WHERE `usr_username` LIKE '".$_POST['user']."'
AND `usr_passwd` LIKE '".$_POST['pass']."'";

//echo $queEmp;
$resEmp = mysqli_query($conexion, $queEmp) or die(mysqli_error($conexion));
$totEmp = mysqli_num_rows($resEmp);

//echo "<br>";
echo $totEmp;

if($totEmp > 0){
    $_SESSION["Activo"] = 1;
    $_SESSION["Usuario"] = $_POST['user'];
    header("Location: Registro.php");
} else {
    header("Location: index.html");
}

mysqli_close($conexion);
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">