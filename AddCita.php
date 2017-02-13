<?php
require("Cabeza.php");
require("SQL.php");
?>
<?php
if($_POST){

    $queEmp = "INSERT INTO `veterinaria`.`cit_cita` (`cit_id`, `cit_fecha`, `cit_hora`, `cit_programacion`, `estado`, `doc_cit_id`, `infm_cit_id`) 
		VALUES (NULL, '".$_POST["Fecha"]."', '".$_POST["Hora"].":00', '".$_POST["Programa"]."', 'Pendiente', '".$_POST["Doctor"]."', '".$_POST["Paciente"]."')";
    //echo $queEmp."<br>";
    $resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
    echo "<p><h2><b>Creacion de la cita</b></h2></p>";

}
else{
?>
<div id="main3">
    <center><p>
        <form name="formulario" method="POST" onSubmit='return Connprobacion()' action="AddCita.php" class="registro"> 
            <h2><b>Añadir cita al sistema</b></h2>
            <b>Fecha: </b><br><div id="datetimepicker3" class="input-append date">
            <input data-format  ="yyyy-MM-dd" type="text" name="Fecha" ></input>
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
            </span>
            </div>
        <b>Hora: </b><div id="datetimepicker4" class="input-append date">
        <input data-format="HH:mm" type="text" name="Hora" ></input>
        <span class="add-on">
            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
        </span>
        </div>
    <b>Programa:</b><br><input type="text" name="Programa">
    <p><b>Doctor: </b><br>
        <select name="Doctor">
            <?php
    $queEmp = "SELECT * FROM emp_empleados where car_emp_id = '3'";
    //echo $queEmp;
    $resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
    while ($row = mysql_fetch_row($resEmp)){
        echo "<option value=".$row[0]." selected>".$row[1]."</option>";
    }
            ?>
        </select>
    <br><b>Paciente: </b><br>
        <select name="Paciente">
            <?php
    $queEmp = "SELECT * FROM infm_informacion_mascotas";
    //echo $queEmp;
    $resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
    while ($row = mysql_fetch_row($resEmp)){
        echo "<option value=".$row[0]." selected>".$row[1]."</option>";
    }
            ?>
        </select>
    <p><input type="submit" value="Ingresar">
        <script type="text/javascript">
            $(function() {
                $('#datetimepicker3').datetimepicker({
                    language: 'es-Es'
                });
                $('#datetimepicker4').datetimepicker({
                    pickDate: false
                });
            });
        </script>	
    </form>
<p></center>
<?php
}
?>

<div id="footer3">
    <p>Copyright &copy;</p>
    </footer>
</div>