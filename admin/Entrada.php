<!DOCTYPE html>
<html lang="en" style="color: var(--blue);">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>DrimTech - Blog de Tecnologia</title>

        <link rel="icon" href="../browser.png">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="../assets/css/Article-List.css">
        <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
        <link rel="stylesheet" href="../assets/css/Highlight-Phone.css">
        <link rel="stylesheet" href="../assets/css/Navigation-with-Search.css">
        <link rel="stylesheet" href="../assets/css/Sidebar-Menu-1.css">
        <link rel="stylesheet" href="../assets/css/Sidebar-Menu.css">
        <link rel="stylesheet" href="../assets/css/styles.css">
        <link rel="stylesheet" href=".//assets/css/Entrada.css">
        <style>

            h2{
                text-align:center;
            }
            
            table{
                width:50%;
                
                margin:auto;
                background-color:rgb(218, 218, 218);
                border:solid 2px #ffffff;
                padding:5px;
                
            }
            
            td{
                padding:5px 0;
            }
            
            
            </style>
    </head><!--Título de pestaña, importaciones y conexiones-->
<body style="color: var(--blue);background: var(--gray-dark);">
                <?php
                session_start();

                if(!isset($_SESSION['admin_login']))    
                {
                    header("location: ../index.php");  
                }

                if(isset($_SESSION['personal_login']))  
                {
                    header("location: ../personal/personal_portada.php");   
                }

                if(isset($_SESSION['usuarios_login']))  
                {
                    header("location: ../usuarios/usuarios_portada.php");
                }
                
                if(isset($_SESSION['admin_login']))
                {
                ?>
                    Bienvenido,
                <?php
                        echo $_SESSION['admin_login'];
                }
                ?>
    <h1 style="border-right-style: none;text-align: center;color: var(--light);">DrimTech</h1><!--Título-->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: var(--gray);">
        <div class="container"><a class="navbar-brand" href="index.html">DrimTech Blog</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../index.html">Vista Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Ver publicaciones</a></li>
                    <a href="../cerrar_sesion.php"><button class="btn btn-danger text-left"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
                    
                </ul><!--Lista de elementos de la Navigation Bar (Barra de navegación)-->
                
            </div> 
        </div>
    </nav><!--Barra de navegación/elementos enlazables-->
    <br>
    
    <h2>Nueva entrada</h2>
<form action="Insertar Contenido.php" method="post" enctype="multipart/form-data" name="form1">
<table >
<tr>
  <td>Título: 
    <label for="campo_titulo"></label></td>
  <td><input type="text" name="campo_titulo" id="campo_titulo"></td>
  
  
  </tr>
  <tr><td>Cuerpo:
    <label for="area_comentarios"></label></td>
    <td><textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50"></textarea></td>
    </tr>
    <input type="hidden" name="MAX_TAM" value="2097152">
  <tr>
  <td colspan="2" align="center">Seleccione una imagen con tamaño inferior a 2 MB</td></tr>
  <tr>
    <td colspan="2" align="left"><input type="file" class="btn btn-light action-button" name="imagen" id="imagen"></td>
    </tr>
    <tr>
    <td colspan="2" align="center">  
    <input type="submit" class="btn btn-light action-button" name="btn_enviar" id="btn_enviar" value="Enviar"></td></tr>
  <tr><td colspan="2" align="center"><a href="Mostrar Blog.php">Página de visualización del blog</a></td></tr>
  
  </table>
</form>
<p>&nbsp;</p>
<footer class="footer-basic" style="background: var(--gray);border-color: var(--orange);">
    <div class="social"><a href="#"><i class="icon ion-social-instagram" style="border-color: var(--blue);"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>            
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#" >Home</a></li>
        <li class="list-inline-item"><a href="#" >Servicios</a></li>
        <li class="list-inline-item"><a href="#" >Sobre nosotros</a></li>
        <li class="list-inline-item"><a href="#" >T&eacute;rminos</a></li>
        <li class="list-inline-item"><a href="#" >Pol&iacute;tica de privacidad</a></li>
    </ul><!--Términos y condiciones, servicios, sobre nosotros, privacidad-->
    
    <p class="copyright">DrimTeam Technlogies© 2021, All Rights Reserved</p>
</footer><!--Footer, pie de página, redes sociales y contacto-->
</section><!--Cuerpo del blog, publicaciones más recientes, redes sociales, footer, etc.-->
</body>
</html>