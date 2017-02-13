<?php
require("Cabeza.php");
require("SQL.php");
error_reporting(0);
?>
<?php

		if($_GET)
			{
			if($_GET["Estado"] == "AA"){
				
				$queEmp =  "UPDATE `veterinaria`.`cit_cita` 
				SET `cit_fecha` = '".$_GET["Fecha"]."',`cit_hora` = '".$_GET["Hora"].":00 ' 
				WHERE `cit_cita`.`cit_id` ='".$_GET["ID"]."'";
				echo $queEmp."<br>";
				$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
				}
			else if($_GET["Estado"] == "A"){
				?>
					     <center><p>
						<form name="formulario" method="Get" onSubmit='return Connprobacion()' action="VerCita.php" class="registro3"> 
	 
	 				<h2><b>Cambio de fecha y hora</b></h2>
					<p><b>Fecha</b><div id="datetimepicker3" class="input-append date">
                    <input data-format="yyyy-MM-dd" type="text" name="Fecha" ></input>
                    <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                    </span>
                    </div>
					<p><b>Hora (Hora:Minuto): </b><div id="datetimepicker4" class="input-append date">
                    <input data-format="HH:mm" type="text" name="Hora" ></input>
                    <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                    </span>
                    </div>
					<p><input type="radio" name="ID" value=<?php echo $_GET["ID"] ?> checked="true"><b>Cambiar</b>
					
					<p><input type="submit" value="Ingresar">
                        <script type="text/javascript">
                                $(function() {
                                    $('#datetimepicker3').datetimepicker({
                                            language: 'es-Es'
                                            });
                                    $('#datetimepicker4').datetimepicker({
                                        language: 'es-Es'
                                    });
                                });
                        </script>	
						</form>
					<p></center>
				<?php
				}
			else if($_GET["Estado"] == "C"){
				$queEmp =  "UPDATE `veterinaria`.`cit_cita` SET `estado` = 'Cancelado' WHERE `cit_cita`.`cit_id` ='".$_GET["ID"]."'";
				//echo $queEmp;
				$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
				echo "<p><b><h2>Cita cancelada</b></h2></p>";
				}
			}
		else
			{
	 	  	$queEmp = "SELECT * FROM cit_cita where estado = 'Pendiente' ORDER BY cit_fecha, cit_hora;";
			//echo $queEmp;
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
			echo "<p><b><h2>Lista de citas pendientes</b></h2></p>";		 
	?>
				<center>
		<?php
		echo "<table>"; 
		echo "<tr><td><b>ID</b></td><td><b>Fecha</b></td><td><b>Hora</b></td><td><b>Programación</b></td><td><b>Estado</b></td><td><b>Doctor</b></td><td><b>Mascota</b></td></tr> \n"; 
			while ($row = mysql_fetch_row($resEmp)){ 
				echo "<tr>";
				echo "<td>$row[0]</td>";
				echo "<td>$row[1]</td>";
				echo "<td>$row[2]</td>";
				echo "<td>$row[3]</td>";
				echo "<td>$row[4]</td>";

					$queEmp2 = "SELECT * FROM emp_empleados where emp_id ='".$row[5]."'";
					$resEmp2 = mysql_query($queEmp2, $conexion) or die(mysql_error());
					$row2 = mysql_fetch_row($resEmp2);
				echo "<td>$row2[1] $row2[2]</td>";

				$queEmp2 = "SELECT * FROM infm_informacion_mascotas where infm_id ='".$row[6]."'";
					$resEmp2 = mysql_query($queEmp2, $conexion) or die(mysql_error());
					$row2 = mysql_fetch_row($resEmp2);
				echo "<td>$row2[1]</td>";
				echo "<td><a href='?Estado=C&ID=$row[0]'>Cancelar</a></td>";
				}				
			echo "</table>"; 
		}
	?> 			
		</p></center>
           
<div id="footer1">
      <p>Copyright &copy;</p>
    </footer>
  </div>