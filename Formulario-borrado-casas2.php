<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta author="Alejandro Valencia Valencia">
    <title>The future is now</title>
    <link rel="stylesheet" href="fontello.css">
    <link rel="stylesheet" href="fontello-code.css">
    <link rel="stylesheet" href="fontello-embedded.css">
    <link rel="stylesheet" href="fontello-ie7.css">
    <link rel="stylesheet" href="fontello-ie7-codes.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="Banner.css">
    <link rel="stylesheet" href="info.css">
    <link rel="stylesheet" href="Formularios.css">
    <link rel="icon" href="Logo1.ico">

</head>
<body>
    <header>
        <div class="contenedor">
            <a href="domotica.html"><h1 class="icon-home">The future is now</h1></a>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu-outline" for="menu-bar"></label>
            <nav class="menu">

                <a href="domotica.html">Inicio</a>
      
                <a href="casas.html">Casas</a>
    
                <a href="mision.html">Misión</a>
           
                <a href="vision.html">Visión</a>

                <a href="encuesta.html">Encuesta</a>

                <a href="Formulario-busqueda.php">Consulta Datos</a>

                <a href="Formulario-empleados.php">Empleados</a>



            </nav>
        </div>
    </header>
    <section id="banner">
        <img src="imagen 4.jpg ">
        <div class="contenedor">
        <h2>Formulario de eliminación de datos</h2>
        <p>El mejor servicio en la palma de su mano.</p>
        </div>              
    </section>

<section id="blog">
        <div class="contenedor">
           <form action="#" class="formulario" id="formulario" name="formulario" name="formulario" method="GET">
           <h1 class="formulario__titulo">Eliminación de datos</h1>
          
            <label for="Cod_ca" class="fomulario__label">Ingrese el codigo de la venta:</label><input type="numbers" placeholder="Ingrese el codigo de la venta" maxlength="11" name="Cod_ca" id="Cod_ca"  class="formulario__input" >
            
            <label for="di_ca" class="fomulario__label">Ingrese el valor de la casa:</label> <input type="name" placeholder="Digite el valor de la casa" maxlength="20" name="di_ca" id="di_ca" class="formulario__input" >
           
            <div class="terminos">
					<input type="checkbox" name="terminos" id="terminos">
					<label for="terminos">Acepto Terminos y Condiciones</label>
			</div>
            <br>

            <input type="submit" name="registrarse" class="formulario__submit">
              <br>
              <p class="copy">The future is now &copy; 2020</p>               
           <center><img src="Logo.jpg" ></center>             
           </form>
        </div>
 
           
</section>
</body>
<section id="info">
    <h3>Para nosotros la prioridad es el cliente, y entregar un buen servicio.</h3>
    <div class="contenedor"></div>
    <div class="info-pet"></div>
    <img src="d5.jpg" >
</section>


<footer>
<div class="contenedor">
<p class="copy">The future is now &copy; 2020</p>
<div class="sociales">
    <a class="icon-phone">67503720</a>
    <a class="icon-gmail" > av739006@gmail.com</a>
    <a class="icon-facebook" href="https://www.facebook.com/alejandro.valenciavalencia.9"></a>
    <a class="icon-instagram" href="https://www.instagram.com/alejo78912/?hl=es-la"></a>
    <a class="icon-whatsapp" href="https://wa.me/573209464638?text=Hola,%20necesito%20infomación%20sobre%20las%20casas."></a>
    <a class="icon-map-o" href="https://www.google.com/maps/search/mocawa+centro+comercial/@4.5499537,-75.6619287,17z/data=!3m1!4b1"></a>


                 </div>
            </div>
        </footer>
    </body>
</html>
<?php

            $Cod_ca=$_GET['Cod_ca'];
            $di_ca=$_GET['di_ca'];
            $cod_ma1=$_GET['cod_ma1'];
            $cod_m1=$_GET['cod_m1'];

       
      require("conexion (1).php");

      $conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);

      if (mysqli_connect_errno())
      {
		    echo "<br>";
	     	echo "No pudo conectarse con la Base de Datos";
		    exit();
	    }

	    mysqli_set_charset($conexion, "utf8");

      $consulta="delete from clientes where Cod_ca = '$Cod_ca'";


      $resultados=mysqli_query($conexion, $consulta);  

      if($resultados==false){

        echo "Error en la Eliminacion de Datos";
      }
      else{

        if (mysqli_affected_rows($conexion)==0){

          echo "No hay registros para eliminar con esta clave";
        }
        else{
          echo "Se han eliminado" . mysqli_affected_rows($conexion) . " registros";
        }

        
      }
    ?>
