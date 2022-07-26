<?php include 'header.php';?>



<br><br><br>
<p class="lead">Dar de alta un nuevo proyecto</p>
<hr class="my-2">

<br><br>

<?php if($_POST){#si hay envio de datos, los inserto en la base de datos  

$nombre_proyecto = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$link = $_POST['link'];
#nombre de la imagen
$imagen = $_FILES['archivo']['name'];
#tenemos que guardar la imagen en una carpeta 
$imagen_temporal=$_FILES['archivo']['tmp_name'];
#creamos una variable fecha para concatenar al nombre de la imagen, para que cada imagen sea distinta y no se pisen 
$fecha = new DateTime();  
$imagen= $fecha->getTimestamp()."_".$imagen;
move_uploaded_file($imagen_temporal,"imagenes/".$imagen);

#creo una instancia(objeto) de la clase de conexion
$conexion = new conexion();
$sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`, `link`) VALUES (NULL, '$nombre_proyecto' , '$imagen', '$descripcion', '$link')";
$id_proyecto = $conexion->ejecutar($sql);
 #para que no intente borrar muchas veces
 header("Location:index_admin.php");
 die();

}
#si nos envian por url, get 
if($_GET){

#ademas de borrar de la base , tenemos que borrar la foto de la carpeta imagenes
if(isset($_GET['borrar'])){
    $id = $_GET['borrar'];
    $conexion = new conexion();

    #recuperamos la imagen de la base antes de borrar 
    $imagen = $conexion->consultar("select imagen FROM  `proyectos` where id=".$id);
    #la borramos de la carpeta 
    unlink("imagenes/".$imagen[0]['imagen']);

    #borramos el registro de la base 
    $sql ="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id; 
    $id_proyecto = $conexion->ejecutar($sql);
     #para que no intente borrar muchas veces
     header("Location:index_admin.php"); 
     die();
}

if(isset($_GET['modificar'])){
    $id = $_GET['modificar'];
    header("Location:modificar.php?modificar=".$id);
    die();
}
} 
#vamos a consultar para llenar la tabla 
$conexion = new conexion();
$proyectos= $conexion->consultar("SELECT * FROM `proyectos`");
?> 


<!--ya tenemos un container en el header que cierra en el footer-->

<div class="row d-flex justify-content-center mb-5">
    <div class="col-md-10 col-sm-12">
        <div class="altaproyecto" class="card">
            
            <div class="card-body">
                <!--para recepcionar archivos uso enctype-->
                <form action="index_admin.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="nombre">Nombre del Proyecto</label>
                        <input required class="form-control" type="text" name="nombre" id="nombre">
                    </div>
                
                    <div>
                        <label for="archivo">Imagen del Proyecto</label>
                        <input required class="form-control" type="file" name ="archivo" id="archivo">
                    </div>
                    <br>
                    <div>
                        <label for="descripcion">Indique Descripción del Proyecto</label>
                        <textarea required class="form-control" name="descripcion" id="descripcion" cols="30" rows="4"></textarea>
                    </div>
                    <div>
                        <label for="link">Indique link del Proyecto</label>
                        <textarea required class="form-control" name="link" id="link" cols="30" rows="1"></textarea>
                    </div>
                    <div>
                    <br>
                    <input id="btn-nuevo-proyecto" class="btn btn-success" type="submit" value="Enviar Proyecto">
                    
                    <br>    
                </div> 
            
                </form>
            </div> <!--cierra el body-->

        </div><!--cierra el card-->
        
    </div><!--cierra el col-->
</div><!--cierra el row-->

<br><br><br><br>

<?php $conexion = new conexion();# es un objeto de tipo conexion,
      $proyectos= $conexion->consultar("SELECT * FROM `proyectos`"); ?>

<p class="lead">Proyectos Cargados en base de datos</p>
        <hr class="my-2">
        <br><br><br>

<div class="container bg-dark" >
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php #leemos proyectos 1 por 1
        foreach($proyectos as $proyecto){ ?>
            <div class="col">
                <div class="card border border-3 shadow">
 
                    <a href="<?php echo $proyecto['link'];?>">
                    <img class="card-img-top" style="object-fit:cover;" src="imagenes/<?php echo $proyecto['imagen'];?>" alt="" width="300">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $proyecto['nombre'];?></h5>
                        <p class="card-text"><?php echo $proyecto['descripcion'];?></p>
                        <div class="botones">
                        <a onclick="donald()" name="eliminar" id="eliminar" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id'];?>">Eliminar</a>
                        <a name="modificar" id="modificar" class="btn btn-warning" href="?modificar=<?php echo $proyecto['id'];?>">Modificar</a>
                        </div>
                       
                        
                                            
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <br>
</div>



<?php include 'footer.php'; ?>
