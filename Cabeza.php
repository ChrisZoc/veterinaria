<?php
session_start(); 
if( empty($_SESSION["Usuario"])) 
{
    session_destroy();
    header("Location: index.html");  
}
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8"> 
        <title>Veterinaria</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css" rel="stylesheet">.
        <link rel="shortcut icon" href="images/IMG-20150710-WA0009.jpg"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script type="text/javascript" src="js/modernizr-1.5.min.js"></script> 
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript"src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js"></script>            

        </script>
    </head>

<body>
    <div id="main">
        <header>

            <img id="logo" top: 35px left: 470px  src="images/IMG-20150710-WA0009.jpg" alt="Animals" width="172.5">
            <h1 id="idTitulo">Clinica Veterinaria<br>Animals</h1>
            <br>           
            <nav class="nav nav-pills">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font color="white">Usuario</font><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="AddUsuario.php">Añadir</a></li>
                                    <li><a href="EditUsuario.php">Editar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font color="white">Cliente</font><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="AddCliente.php">Añadir</a></li>
                                    <li><a href="VerCliente.php">Ver</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font color="white">Mascotas</font><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="AddMascota.php">Añadir</a></li>
                                    <li><a href="VerMascota.php">Ver</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font color="white">Citas</font><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="AddCita.php">Añadir</a></li>
                                    <li><a href="VerCita.php">Ver citas</a></li>
                                    <li><a href="Historia.php">Historial</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="CerraSesion.php" title="Cerrar sesión">Salir</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <center>