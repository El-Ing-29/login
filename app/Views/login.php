<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/plantilla/css/estilo.css">

   <!-- <link href=”css/estilo.css” rel=”stylesheet” type=”text/css” />
    <link rel="stylesheet" href="css/estilo.css" type=”text/css”/> 
-->

  

    <title>Login Codeigniter</title>
  </head>
  <body>
  	<form method="POST" action="<?php echo base_url().'/login' ?>" class="form-register">
  		<h1 class="form_titulo">Login con codeigniter 4</h1>
    		<div class="contenedor-inputs">
                <label for="nombre">Nombre</label>
                <br>
                <input type="text" name="nombre" id="nombre" class="input-100" placeholder="Nombre" required="">

                <label for="usuario">Apellido Paterno</label>
                <br>
                <input type="text" name="a_paterno" id="a_paterno" class="input-100" placeholder="Apellido Paterno" required="">
                <label for="usuario">Email</label>
                <br>
                <input type="text" name="email" id="email" class="input-100" placeholder="Ejemplo:xxx@gmail.com" required="">
                <label for="usuario">Usuario</label>
                <br>
                <input type="text" name="usuario" id="usuario" class="input-100" placeholder="Usuario" required="">
                <label for="password">Contraseña</label>
                <br>
                <input type="password" name="password" id="password" class="input-100" placeholder="Contraseña" required="">
                <br>
                <button aling="center" class="btn_enviar">Entrar</button>
                <p class="form_link">¿Ya tienes una cuenta?<a href="<?php echo base_url().'/listado' ?>">REGISTRAR</a></p>
    </form>
            </div>
            <div class="col-sm-4"></div>  
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
      let mensaje = '<?php echo $mensaje ?>';

      if (mensaje == '1') {
        swal(':D','Usuario Correcto','success');

      }else if (mensaje =='0') {
        swal(':(','Usuario incorrecto','error');
      }
     
    </script>

  </body>
</html>
