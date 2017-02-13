
<?php
require("Cabeza.php");
require("SQL.php");
error_reporting(0);
?>
	
	<?php
	 if($_POST){
		 
		 if($_POST["pass1"] == $_POST["pass2"]){
			$queEmp = "UPDATE `veterinaria`.`usr_usuarios` SET `usr_passwd` = '".$_POST["pass1"]."' WHERE `usr_usuarios`.`usr_username` = '".$_SESSION["Usuario"]."'";
			//echo $queEmp;
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
			echo "<p><h2><b>Modificación de contraseña satisfactoria</b><h2></p>";
			 }
		 else
			
		 ?>
<div class="alert alert-danger" role="alert"><h2><b>las contraseñas no coinciden intenta de nuevo</b></h2></div>
<p><div id="main3">
	<form name="formulario" method="POST" onSubmit='return Connprobacion()' action="EditUsuario.php" class="registro1">
	<div class="form-group">
        <p class="text-muted"><h2><b>Cambio de Contraseña</b></h2></p>
        <label for="exampleInputEmail1"><b>Nueva contraseña:</b></label>
    <input type="Password" class="form-control" id="exampleInputEmail1" placeholder="Password" name="pass1">
  </div>
  <div class="form-group">
      <label for="exampleInputPassword1"><b>Confirmar-Contraseña:</b></label>
    <input type="Password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass2">
  </div>
	<p><input type="submit" value="Ingresar" class="btn btn-info">
	</form>
				</div></p>
<?php
		 }
	 else{	 
	?>
				<p><div id="main3">
	<form name="formulario" method="POST" onSubmit='return Connprobacion()' action="EditUsuario.php" class="registro1">
	<div class="form-group">
        <p class="text-muted"><h2><b>Cambio de Contraseña</b></h2></p>
        <label for="exampleInputEmail1"><b>Nueva contraseña:</b></label>
    <input type="Password" class="form-control" id="exampleInputEmail1" placeholder="Password" name="pass1">
  </div>
  <div class="form-group">
      <label for="exampleInputPassword1"><b>Confirmar-Contraseña:</b></label>
    <input type="Password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass2">
  </div>
	<p><input type="submit" value="Ingresar" class="btn btn-info">
	</form>
				</div></p>
       
     <?php
		}
     ?>  
       
           
<div id="footer3">
      <p>Copyright &copy;</p>
    </footer>
  </div>