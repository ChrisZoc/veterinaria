<?php

include_once "SQL.php";
include_once "Cabeza.php";

?>
<p></p>
<div id="main3">
<form action="" method="post" class="registro">

    
    	<div class="form-group">
            <p class="text-muted"><h2><b>Añadir Usuario:</b></h2></p>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Nombre:</b></label>
                <input class="form-control" id="exampleInputEmail1" placeholder="Usuario" name="usuario">
                <label for="exampleInputPassword1"><b>Contraseña:</b></label>
                <input type="Password" class="form-control" id="exampleInputPassword1" placeholder=" Contraseña" name="password">
                <label for="exampleInputPassword1"><b>Confirmar-Contraseña:</b></label>
                <input type="Password" class="form-control" id="exampleInputPassword1" placeholder=" Confirmar-Contraseña" name="repassword">
            </div>
    
            <p><b>Cargo: </b>
            <select name="Cargo">
                <?php
                $queEmp = "SELECT * FROM `car_cargos`";
                $resEmp = mysqli_query($conexion, $queEmp) or die(mysqli_error($conexion));
                while ($row = mysqli_fetch_row($resEmp)){
                    echo "<option value=".$row[0]." selected>".$row[1]."</option>";
                }
                ?>
            </select>
            </p>
            <input type="submit" name="enviar" value="Ingresar" class="btn btn-primary">
        </div>  


</form>
            

<?php

if(isset($_POST['enviar']))

{

    if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '')

    {

        echo 'Por favor llene todos los campos.';

    }

    else

    {

        $sql = 'SELECT * FROM usr_usuario';

        $rec = mysqli_query($conexion, $sql);

        $verificar_usuario = 0;

 

        while($result = mysqli_fetch_object($rec))
        {

            if($result->usr_username == $_POST['usuario'])

            {

                $verificar_usuario = 1;

            }

        }

 

        if($verificar_usuario == 0)

        {

            if($_POST['password'] == $_POST['repassword'])

            {

                $usuario = $_POST['usuario'];

                $password = $_POST['password'];

                $contra = md5($password);

                $sql = "INSERT INTO usr_usuario (usr_username, usr_passwrd) VALUES ('$usuario','$contra')";

                mysqli_query($conexion, $sql);

 

                echo 'Usted se ha registrado correctamente.';

            }

            else

            {

                echo 'Las password no son iguales, intente nuevamente.';

            }

        }

        else

        {

            echo 'Este usuario ya ha sido registrado anteriormente.';

        }

    }

}

?>

<div id="footer5">
    <footer>
        <p>Copyright &copy;</p>
    </footer>
</div>