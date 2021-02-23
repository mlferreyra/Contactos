<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilosnew.css" rel="stylesheet">
  </head>

<body>
    <?php include("header1.php"); ?> 
        <div class="container">



            <div class="form-center">


                <form name="contacto_form" id="contacto" method="post" action="#" class="form-horizontal">
                    <h1>CONTACTO</h1>
                    <p>Completa el siguiente formulario para realizar su consulta.</p> 
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text"  name="Nombre" id="Nombre" class="form-control" required placeholder="Nombre completo" autofocus>
                    </div>    
                    <div class="form-group">             
                        <label>Teléfono: </label>
                        <input type="tel"  name="telefono" id="telefono" class="form-control" placeholder="Ingrese su número telefónico" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email"  name="email" id="email" class="form-control" placeholder="Email..." required>
                    </div>
                    <div class="form-group">
                        <label>Consulta:</label>
                        <textarea id="mensaje" name="mensaje"  class="form-control" rows="6" placeholder="Ingrese su consulta..." required></textarea>
                    </div>
                    <div id="enviar">
                        <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
                    </div>
                </form>

            </div>

            <?php include("footer1.php"); ?> 
        </div>
        
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>