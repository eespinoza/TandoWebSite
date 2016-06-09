<?php
    $hn = "localhost";
    $db = "tando website";
    $us = "Maple";
    $pd = "";
    $conn = mysqli_connect($hn, $us, $pd, $db) or die("No se pudo conectar a la base de datos.");
    session_start();
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="StyleSheet.css" />
    <title>Tandotek Solutions</title>
	<meta charset="utf-8" />
</head>
<body>   
   <div class="bar">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img src="Logo Tandotek Chico.png" alt="Tando" height="55">
                    </a>	
                </div>
                <div id="navbar3" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php#heading">Home</a></li>
                        <li><a href="index.php#location">Nosotros</a></li>
						<li><a href="index.php#tecnologia">Servicios</a></li>
                        <li><a href="correo.php">Contacto</a></li>
                         <?php
                            if(!isset($_SESSION["id"])) {
                                echo "</ul>
                                <ul class='nav navbar-nav navbar-right'>
                                    <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Iniciar sesión</a></li>
                                </ul>";
                                } else {
                                echo "<li><a href='demo.php'>Demo</a></li>
                                </ul>
                                <ul class='nav navbar-nav navbar-right'>
                                    <li><a>Bienvenido " . $_SESSION['username'] . "</a></li>
                                    <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Cerrar sesión</a></li>
                                </ul>";
                            }
                            ?>
            </div>
        </div>
    </nav>
</div>