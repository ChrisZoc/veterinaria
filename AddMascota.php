   
<?php
require("Cabeza.php");
?>
<?php
require("SQL.php");
error_reporting(0);
?>
	
	<?php
	 if($_POST){
		  	$queEmp = "INSERT INTO `veterinaria`.`infm_informacion_mascotas` (`infm_id`, `infm_nombre`, `infm_nacimiento`, `id_propietario`, `mas_infm_id`, `gen_infm_id`, `esm_infm_id`, `tps_infm_id`, `infm_fingreso`, `fam_infm_id`) 
		  	VALUES (NULL, '".$_POST["Nombre"]."', '".$_POST["Nacimiento"]."', '".$_POST["Propietario"]."', '".$_POST["Especie"]."', '".$_POST["Genero"]."', '".$_POST["Estado"]."', '".$_POST["EstadoClinico"]."', '".$_POST["FechaIngeso"]."', '".$_POST["Familia"]."')";
		  	//echo $queEmp;
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
			echo "<br><br><br><p><h2><b>Creacion de cliente mascota</b></h2></p>";
		 }
	 else{	 
	?>
	<div id="main4">
        <br><br>
	<form name="formulario" method="POST" onSubmit='return Connprobacion()' action="AddMascota.php" class="registro2">
        <br>
	<h2><b>Añadir mascota</b></h2>
        <b>Nombre:</b><br><input type="text" name="Nombre">
        <br>
        <b>Fecha de nacimiento:</b><div id="datetimepicker1" class="input-append date">
    <input data-format="yyyy-MM-dd" type="text" name="Nacimiento" ></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
    </span>
  </div>
	<b>Propietario: </b><br>
	<select name="Propietario">
		<?php
		$queEmp = "SELECT * FROM `prop_propietarios` ";
		$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
		while ($row = mysql_fetch_row($resEmp)){
			echo "<option value=".$row[0]." selected>".$row[1]."</option>";
			}
		?>
	</select><br>
	<b>Especie: </b><br>
	<select name="Especie">
		<?php
		$queEmp = "SELECT * FROM `mas_mascotas`";
		$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
		while ($row = mysql_fetch_row($resEmp)){
			echo "<option value=".$row[0]." selected>".$row[1]."</option>";
			}
		?>
	</select><br>
	<b>Familia: </b><br>
	<select name="Familia">
		<?php
		$queEmp = "SELECT * FROM `fam_familia`";
		$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
		while ($row = mysql_fetch_row($resEmp)){
			echo "<option value=".$row[0]." selected>".$row[1]."</option>";
			}
		?>
	</select><br>
	<b>Genero: </b><br>
	<select name="Genero">
		<?php
		$queEmp = "SELECT * FROM `gen_genero`";
		$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
		while ($row = mysql_fetch_row($resEmp)){
			echo "<option value=".$row[0]." selected>".$row[1]."</option>";
			}
		?>
	</select><br>
	
	<b>Estado control: </b><br>
	<select name="Estado">
		<?php
		$queEmp = "SELECT * FROM `esm_estado_mascotas`";
		$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
		while ($row = mysql_fetch_row($resEmp)){
			echo "<option value=".$row[0]." selected>".$row[1]."</option>";
			}
		?>
	</select><br>
	<b>Estado clinico: </b><br>
	<select name="EstadoClinico">
		<?php
		$queEmp = "SELECT * FROM `tps_tipo_salida`";
		$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
		while ($row = mysql_fetch_row($resEmp)){
			echo "<option value=".$row[0]." selected>".$row[1]."</option>";
			}
		?>
	</select><br>
    <b>Fecha de ingreso:</b><div id="datetimepicker2" class="input-append date">
    <input data-format="yyyy-MM-dd" type="text" name="FechaIngeso"></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
    </span>
  </div>
	<p><input type="submit" value="Ingresar"></p>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'es-Es'
    });
    $('#datetimepicker2').datetimepicker({
      language: 'es-Es'
    });
  });
</script>	
</form>
				</p></center>
       
     <?php
		}
     ?>  
       
           
<div id="footer1">
      <p>Copyright &copy;</p>
    </footer>
  </div>