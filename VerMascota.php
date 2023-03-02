     <br>
<?php
require("Cabeza.php");
require("SQL.php");
error_reporting(0);
?>
<?php
	 	  	$queEmp = "SELECT * FROM `infm_informacion_mascotas`";
			//echo $queEmp;
			$resEmp = mysqli_query($conexion, $queEmp ) or die(mysqli_error($conexion)); 
			echo "<p><h2><b>Lista de mascotas</b></h2></p>";		 
	?>
				<center>
		<?php
		echo "<table>"; 
		echo "<tr><td><b>ID</b></td><td><b>Nombre</b></td><td><b>ID Propietario</b></td><td><b>Genero</b></td><td><b>Estado</b></td><td><b>Estado clinico</b></td><td><b>Fecha de ingreso</b></td><td><b>Famila</b></td></tr> \n"; 
			while ($row = mysqli_fetch_row($resEmp)){ 
				echo "<tr>";
				echo "<td>$row[0]</td>";
				echo "<td>$row[1]</td>";
				
					$queEmp2 = "SELECT * FROM prop_propietarios where prop_id ='".$row[3]."'";
					$resEmp2 = mysqli_query($conexion, $queEmp2 ) or die(mysqli_error($conexion));
					$row2 = mysqli_fetch_row($resEmp2);
				echo "<td>$row2[1] $row2[2]</td>";

					$queEmp2 = "SELECT * FROM gen_genero where  gen_id='".$row[5]."'";
					$resEmp2 = mysqli_query($conexion, $queEmp2 ) or die(mysqli_error($conexion));
					$row2 = mysqli_fetch_row($resEmp2);
				echo "<td>$row2[1]</td>";
				
					$queEmp2 = "SELECT * FROM esm_estado_mascotas where  esm_id='".$row[5]."'";
					$resEmp2 = mysqli_query($conexion, $queEmp2 ) or die(mysqli_error($conexion));
					$row2 = mysqli_fetch_row($resEmp2);
				echo "<td>$row2[1]</td>";
				
					$queEmp2 = "SELECT * FROM tps_tipo_salida where  tps_id='".$row[7]."'";
					$resEmp2 = mysqli_query($conexion, $queEmp2 ) or die(mysqli_error($conexion));
					$row2 = mysqli_fetch_row($resEmp2);
				echo "<td>$row2[1]</td>";
				echo "<td>$row[8]</td>";				
					$queEmp2 = "SELECT * FROM fam_familia where  fam_id='".$row[10]."'";
					$resEmp2 = mysqli_query($conexion, $queEmp2 ) or die(mysqli_error($conexion));
					$row2 = mysqli_fetch_row($resEmp2);
				echo "<td>$row2[1]</td>";
				echo "</tr>"; 
				} 
			echo "</table>"; 
	?> 			
		</center>
<div id="footer2">
      <p>Copyright &copy;</p>
    </footer>
  </div>