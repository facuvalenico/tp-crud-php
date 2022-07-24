<?php ob_start(); #esto evita los errores de envios de headers
set_error_handler("var_dump");
include 'conexion.php';
session_start(); #inicializamos variables de sesion
 #si esta logueado lo dejo trabajar y sino lo mando al login de nuevo 
 if ( isset( $_SESSION['usuario'] )!='Admin'){
    header("location:login.php");
    die();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5412455fd2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Dongle&family=Edu+VIC+WA+NT+Beginner:wght@500&family=Fjalla+One&family=Lato:ital@1&family=Montserrat:wght@300&family=Oswald:wght@200&family=Poppins:ital,wght@0,400;0,600;0,700;1,700&family=Roboto:wght@300&family=The+Nautigal:wght@700&family=Updock&display=swap&family=Edu+SA+Beginner:wght@500" rel="stylesheet">
    <title>Portfolio</title>
    <link rel="STYLESHEET" href="cssestilos.css">    
     

</head>
<body>

<div class="container-fluid">

    <header id="contacto">

        <img id="fotocontacto" src="imagenes/mifoto.jpg"/>
         
        <h1 id="titulocontacto">&nbsp;&nbsp;  <u><h2>N i c o l a s &nbsp;&nbsp; B i l i c</h2></u></h1>

        <nav id="navcontacto">
            <a class="nav-link active" href="cerrar.php">Cerrar Sesión</a>
        </nav> 
                    
    </header>
   