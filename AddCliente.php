<?php
require("Cabeza.php");
require("SQL.php");
?>
	
	<?php
	 if($_POST){
		  	$queEmp = "INSERT INTO `veterinaria`.`prop_propietarios` (`prop_id`, `prop_nombre`, `prop_apellido`, `prop_direccion`, `prop_telcasa`, `gen_genero_gen_id`) 
		  	VALUES (null, '".$_POST["Nombre"]."', '".$_POST["Apellido"]."', '".$_POST["Direcion"]."', '".$_POST["TelefonoCasa"]."', '1');";
			//echo $queEmp."<br>";
    		$resEmp = mysqli_query($conexion, $queEmp) or die(mysqli_error($conexion)); 
			echo "<div class='alert alert-success' role='alert'>El usuario se creo correctamente </div>";
		 }
	 else{	 
	?>
	<div id="main5">
				<center><p>
	<form name="formulario" method="POST" onSubmit='return Connprobacion()' action="AddCliente.php" class="registro">
	<div align="center">
        <div class="form-group">
            <p class="text-muted"><h2><b>Añadir cliente</b></h2></p>
            <label for="exampleInputEmail1"><b>Nombre:</b> </label>
    <input  class="form-control" id="exampleInputEmail1" placeholder="Nombre" name="Nombre">
            <label for="exampleInputEmail1"><b>Apellido:</b></label>
    <input  class="form-control" id="exampleInputEmail1" placeholder="Apellido" name="Apellido">
            <label for="exampleInputEmail1"><b>Dirección:</b></label>
    <input  class="form-control" id="exampleInputEmail1" placeholder="Direccion" name="Direcion">
            <label for="exampleInputEmail1"><b>Télefono:</b></label>
    <input  class="form-control" id="exampleInputEmail1" placeholder="Telefono" name="TelefonoCasa">
  </div>
	<p><b>Sexo: </b><input type=radio name=SEXO value="1" ><b> masculino </b><input type=radio name=SEXO value="2"><b> femenino </b>
	</div>
	<input type="submit" value="Ingresar">
	</form>
				</p></center>
       
     <?php
		}
     ?>  
       
<div id="footer1">
      <p>Copyright &copy;</p>
    </footer>
  </div>