<?php
require("Cabeza.php");
require("SQL.php");
error_reporting(0);
?>
<?php
	 	  	$queEmp = "SELECT * FROM cit_cita where estado != 'Pendiente' ORDER BY cit_fecha, cit_hora;";
			//echo $queEmp;
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
			echo "<p><h2><b>Lista de citas pendientes</b></h2></p>";		 
	?>
				<div id="main4">
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
				echo "<td>$row2[2] $row2[3]</td>";
				$queEmp2 = "SELECT * FROM infm_informacion_mascotas where infm_id ='".$row[6]."'";
					$resEmp2 = mysql_query($queEmp2, $conexion) or die(mysql_error());
					$row2 = mysql_fetch_row($resEmp2);
				echo "<td>$row2[1]</td>";
				}				
			echo "</table>"; 
	?> 			
		</div id="main4">
           
<div id="footer3">
      <p>Copyright &copy;</p>
    </footer>
  </div>