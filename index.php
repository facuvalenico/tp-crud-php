<?php include 'conexion.php'; ?>
<?php $conexion = new conexion();
 /*$sql = "SELECT * FROM `proyectos`";
 $datos = $conexion->consultar($sql);*/
 $proyectos= $conexion->consultar("SELECT * FROM `proyectos`");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="STYLESHEET" href="cssestilos.css">
    <title>Portfolio</title>
    <script src="https://kit.fontawesome.com/5412455fd2.js" crossorigin="anonymous"></script>

</head>

<body>

<header>  <!–- Encabezado título, no tiene nav -->
    <h1>
    <section id="header_section_titulo">
        <br><br><br><br>
        <h1>&nbsp;&nbsp;  <u>N i c o l a s &nbsp;&nbsp;&nbsp; B i l i c</u></h1>
        <br><br><br><br><br><br><br><br><br>
    </section>
    </h1>
</header>


<h1 id="titulo">&nbsp;&nbsp;  <u><h1>N i c o l a s &nbsp;&nbsp;&nbsp; B i l i c</h1></u></h1>


<div id="aside_mas_main"><!–- Es un importante bloque que une el lado izquierdo (aside) y el lado derecho (main) del cuerpo principal de la página (body); expluyendo al encabezado (header) -->
<aside> <!–- Apartado con nav e imagen en cada enlace -->
    <nav>
        
        <section>
            <a href="contacto.php"> Contacto </a>
        </section>
        <br>
        <section id="footer_section_redes"><!–- Sección con enlaces de redes sociales-->
            <a href="https://www.instagram.com" target="_blank">
                <i class="fa fa-instagram" aria-hiddem="true">&nbsp;</i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
                <i class="fa fa-facebook" aria-hiddem="true">&nbsp;</i>
            </a>
            <a href="https://www.twitter.com" target="_blank">
                <i class="fa fa-twitter" aria-hiddem="true">&nbsp;</i> 
            </a>
        </section>
        <br>
        
    </nav>      
</aside>

<main> <!–- Principal con una sección para la presentación, otra sección con 2 artículos con enlances al portafolio incorporados en cada uno de ellos. LAs dos secciones en GRID. Y una tercera sección en el medio con el texto de la introducción en div llamado id presentación-->
    
    <section id="main_section_presentacion"><!–- Sección presentación-->
        
            <div id="presentacion">
                <h4>"Soy un profesional Full Stack PHP. Los pilares de mi trabajo son la responsabilidad, la innovación, el respeto a los plazos establecidos y la comunicación eficiente. Busco aportar en IT y estar en permanente crecimiento, brindando todo mi esfuerzo, conocimiento y capacidad en mis trabajos."</h4>
            </div>
            <div id="mifoto">
                <img src="imagenes\mifoto.jpg" alt="Dolar">
            </div>
        
    </section>

    <section id="main_section_introduccion">
        <h1>Mis Proyectos Webs.</h1><br>
        <h4>"Valor real y Monitor de Inversiones fueron sitios desarrollados como prácticas durante mi cursada Full Stack. Decidí que los mismos sean un servicio gratuito de útil información económica al público. Mi motivación corresponde a retribuirles por su apoyo a la educación pública y gratuita en la cual fui formado profesionalmente."</h4>
    </section>

        <div class="container bg-dark">
            <div class ="row row-cols-1 row-cols-md-3 g-4">
                <?php #leemos proyectos 1 por 1
                foreach($proyectos as $proyecto){ ?>
                    <div class="col">
                        <div class="card border border-3 shadow w-100">
                            <a href="<?php echo $proyecto['link'];?>">
                                <img class="card-img-top" width="100" src="imagenes/<?php echo $proyecto['imagen'];?>" alt="">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-dark"><?php echo $proyecto['nombre'];?></h5>
                                <p class="card-text text-dark"><?php echo $proyecto['descripcion'];?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <br>
        </div>
        
</main>
</div>

<footer><!–- Pié de página con los derechos reservados-->
    <h4>Derechos Reservados &nbsp;<span id=lcdtm> R </span>&nbsp; 2022 &nbsp;Nicolás Bilic, Bs. As.</h4>
</footer>

</body>

</html>
