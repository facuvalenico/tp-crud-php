<?php ob_start(); ?>
<?php session_start();
    #validar datos
    if ($_POST){
      #conexion a la base
      #mail
      #contraseña
      #es_admin s o n 
      /*
      select es_admin
      from usuarios where
      mail="" and contraseña = "";*/
        if( ($_POST['email']=="administrador") && ($_POST['pass']=='cac') ){
          $_SESSION['usuario']="Admin";
          $_SESSION['logueado']='S';
          #redirecciono porque ingreso ok 
          header("location:index_admin.php");
          die();
         // exit;
        }
        else{
           echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';
           header("location:index.php");
          
           die();
        }
    }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Dongle&family=Fjalla+One&family=Lato:ital@1&family=Montserrat:wght@300&family=Palette+Mosaic&family=Poppins:ital,wght@0,400;0,600;0,700;1,700&family=Roboto:wght@300&family=The+Nautigal:wght@700&display=swap');
html{
    padding: 0;
    margin: 0;
   
}

        body{
            background-image: url("imagenes/tablas.jpg");
            background-attachment: fixed;
            background-size: cover;
            overflow: hidden;
            background-repeat: no-repeat;
            
                        
        }

        #mainlogin{
            display: grid;
            grid-template-columns: [c0] 1fr[c1] 1fr[c2] 1fr[c3];
            grid-template-rows: [f0] 1fr[f1] 6fr[f2] 1fr[f3];
        }

        #containerlogin{
            grid-column-start: c1;
            grid-column-end: c2;
            grid-row-start: f1;
            grid-row-end: f2;
            width: 100%;
            height: 100%;
            border-radius: 6px;
            box-shadow: 0 10px 30px #000;
            margin: auto;       
            border: 1px solid #ffffff40;
        }

                 
        .filterlogin{
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
            background-color: rgba(243,243,243,0.2);
            height: 100%;
            width: 100%;
            text-align: center;
            font-family:Georgia, 'Times New Roman', Times, serif;
            color: whitesmoke;
                                 
        }

        #info{
            
            text-align: center;
            margin: 10% auto;
            text-shadow: 0 10px 30px #000;
            height: 100%;
            width: 100%;
      
         
            
        }
        
        #formlogin{
            height: 100%;
            width: 100%;
            text-align: center;
                        
        }
       
      

    #email, #subject{
        font-size: large;
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(15px);
        background-color: rgba(243, 243, 243, 0.445);
        width: 70%;
        height: 5vh;
        font-family:Georgia, 'Times New Roman', Times, serif;
        color: black;
        font-style: italic;
    }

    #botonlogin{
        
        font-size: large;
        background-color: #006994;
        width: 70%;
        height: 5vh;
        font-family:Georgia, 'Times New Roman', Times, serif;
        color: whitesmoke;
       
    }

        
    </style>    
</head>

<body>

<div id="mainlogin">    
<div id="containerlogin" class="filterlogin">
    <div class="infologin">
        
        <br><br><br><br><br><br>
        <h1>Login</h1>
        <br><br>
        <form id="formlogin" action="login.php" method="post">
            <input type="text" name="email" id="email" class="field" placeholder="Usuario" required><br><br><br><br>
            <input type="password" name="pass" id="subject" class="field" placeholder="Password" required><br><br><br><br>
            <input type="submit" value="Enviar" id="botonlogin" class="btn">
        </form>
        <br><br><br><br><br><br><br><br><br><br>
    </div>
</div>
</div>

</body>
</html> 