<!DOCTYPE html>
<html>

<head>
    <title>CRUD PDO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>

<body>
    
    <h1 align="center">Registro</h1>
    
    <a href="main.php">back</a>
    
    <div class="container">
        
        <form method="post" action="../controllers/Add.php">
             
             
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                <input type="text"  class="form-control" name="name" placeholder="Ingrese el nombre de la persona" require="true"/>  
            </div>
            
            <div class="form-group"></div>
          
           <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="number"  name="phone" class="form-control" placeholder="Digite su numero telefonico" require="true"/>
            </div>
            
            <div class="form-group"></div>
            
           <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text"  name="user" class="form-control" placeholder="Digite su usuario" require="true"/>
            </div>
            
            <div class="form-group"></div>
            
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
                <input type="password"  name="pass" class="form-control" placeholder="Digite su contraseña" require="true"/>
            </div>
            
            <div class="form-group"></div>
            
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                <input type="password" class="form-control" name="pass_confir" class="form-control" placeholder="Vuelva a escribir su contraseña" require="true"/>
            </div>
            
            <div class="form-group"></div>
            
            <div>
                <input type="submit" class="btn btn-info" value="Guardar"/>
                <input type="reset" class="btn btn-info" value="Cancelar"/>
            </div>
            
        </form>
    </div>
</body>
</html>