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
   