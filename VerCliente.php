   
<?php
require("Cabeza.php");
require("SQL.php");
error_reporting(0);
?>
	
	<?php
	 	  	$queEmp = "SELECT * FROM `prop_propietarios`";
			//echo $queEmp;
     		 $resEmp = mysqli_query($conexion, $queEmp) or die(mysqli_error($conexion));

			echo "<p><h2><b>Lista de clientes</b></h2></p>";		 
	?>
				<center>
		<?php
		echo "<table>"; 
		echo "<tr><td><b>ID</b></td><td><b>Nombre</b></td><td><b>Apellido</b></td><td><b>Direcion</b></td><td><b>Telefono</b></td></tr> \n"; 
			while ($row = mysqli_fetch_row($resEmp)){ 
				echo "<tr>";
				echo "<td>$row[0]</td>";
				echo "<td>$row[1]</td>";
				echo "<td>$row[2]</td>";
				echo "<td>$row[3]</td>";
				echo "<td>$row[4]</td>";
				echo "</tr>"; 
				} 
			echo "</table>"; 
?> 			
		</center>
       
     <?php
		
     ?>  

<div id="footer2">
      <p>Copyright &copy;</p>
    </footer>
  </div>