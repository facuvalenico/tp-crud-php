<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <script src="https://kit.fontawesome.com/5412455fd2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="STYLESHEET" href="cssestilos.css">
    <script src="javascript.js"></script>
</head>
<body>

    <header id="contacto">

        <img id="fotocontacto" src="imagenes/mifoto.jpg"/>
         
        <h1 id="titulocontacto">&nbsp;&nbsp;  <u><h2>N i c o l a s &nbsp;&nbsp; B i l i c</h2></u></h1>

        <nav id="navcontacto">
          <a href="index.php" target="_parent">Portfolio</a> 
        </nav> 
                    
    </header>
    
    
<div class="container">
<br><br><br><br>
    <h4><u>Contacto</u></h4>      

      
<br>   

    <form class="row" name="formulario" method="get">

        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre/s</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
          </div>

        <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido/s</label>
            <input type="text" class="form-control" name="apellido" id="apellido">
          </div>


        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email">
          </div>


        
        <div class="col-md-4">
          <label for="sexo" class="form-label">Sexo</label>
          <select id="sexo" class="form-select" name="sexo" id="sexo">
            <option selected>Masculino</option>
            <option>Femenino</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="edad" class="form-label">Edad</label>
          <input type="text" class="form-control" name="edad" id="edad">
        </div>
        <div class="mb-3">
          <label for="areatexto" class="form-label">Dejame tu comentario</label>
          <textarea class="form-control" name="areatexto" id="areatexto" rows="3"></textarea>
        </div>  

    <br><br>    
        <div class="col-12">
            <br><br>
          <button type="submit" class="btn btn-primary" name="boton" id="boton" value="Enviar">Enviar</button>
        </div>
      </form>
    </div>



    <footer><!–- Pié de página con los derechos reservados-->
    <h6><b>Derechos Reservados &nbsp;<span id=lcdtm> R </span>&nbsp; 2022 &nbsp;Nicolás Bilic, Bs. As.</b></h6>
</footer>

        <script>
        
          (function(){
             
              var formulario = document.getElementsByName('formulario')[0],
                  elementos = formulario.elements,
                  boton = document.getElementById('boton');
    
              var validarNombre = function(e){
                if (formulario.nombre.value == 0){
                    alert("Campo Nombre/s incompleto");
                    e.preventDefault();
                }
            };
              var validarApellido = function(e){
                if (formulario.apellido.value == 0){
                    alert("Campo Apellido/s incompleto");
                    e.preventDefault();
                }
            };
              var validarEmail = function(e){
                if (formulario.email.value == 0){
                    alert("Campo Email incompleto");
                    e.preventDefault();
                }
            };
              var validarEdad = function(e){
                if (formulario.edad.value == 0){
                    alert("Campo Edad incompleto");
                    e.preventDefault();
                }
            };
    
              var validarAreatexto = function(e){
                if (formulario.areatexto.value == 0){
                    alert("Campo Dejanos tu comentario incompleto");
                    e.preventDefault();
                }
            };
            
            
            var validar = function(e){
                validarNombre(e);
                validarApellido(e);
                validarEmail(e);
                validarEdad(e);
                validarAreatexto(e);
            };
            formulario.addEventListener("submit", validar);
        }())
    
          </script>

</body>

</html>   
