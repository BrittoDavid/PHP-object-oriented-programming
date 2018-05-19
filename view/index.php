
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/styles.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../css/alertify.css">
    <script type="text/javascript" src="../javascript/alertify.js"></script>
    <title>PDO BRITTO</title>
</head>
<body>
   
   <div class="container formulario">
        <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <img src="../img/img.png"  class="center-block"></img>
                </div>
                
        </div>
        
        <div class="espacio">
        </div>
        
        <div class="row">
            <fieldset class="col-xs-10 col-xs-offset-1">
                <legend class="hidden-xs"><h3>Inicio de Sesìon</h3></legend>
                <!-- <h3><small>Juan David</small></h3>-->
                <form class="form horinzotal" method="post" action="../controllers/Validator.php">
                    
                    <div class="form-group">
                        <label class="col-xs-12" for="usuario"><h4>User</h4></label>
                        <div class="col-xs-10 col-xs-offset-1">
                            <input type="text" name="user" id="usuario" class="form-control formulario_input" required/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-xs-12" for="contra"><h4>Password</h4></label>
                        <div class="col-xs-10 col-xs-offset-1">
                            <input type="password" name="pass" id="contra" class="form-control formulario_input" required/>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary center-block" value="Aceptar" />
                    </div>
                    
                </form>
            </fieldset>
        </div>
    </div>
    
    <?php 
        
        if (isset($_GET['c1'])) 
        {
            ?>
            <script>
                alert("Los campos no han sido declarados");
            </script>    
            <?php
        }
        
        if (isset($_GET['c2'])) 
        {
            ?>
            <script>
                alert("Los campos no pueden estar vacios, por favor verifique nuevamente");
            </script>    
            <?php
        }
        
        if (isset($_GET['c3']))
        {
            ?>
            <script>
                alert("Campos incorrectos, por favor vuelva a intentar");
            </script>
            <?php
        }
        
        if (isset($_GET['c4']))
        {
            ?>
            <script>
                alert("Usted no tiene autorizacion, para entrar a este sitio wed");
            </script>    
            <?php
        }
        
        if (isset($_GET['c5'])) 
        {
            ?>
            <script>
                alert("La session ha sido cerrada con exito");
            </script>    
            <?php
        }
    ?>
</body>
</html>