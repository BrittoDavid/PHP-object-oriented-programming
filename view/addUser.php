<!DOCTYPE html>
<html>

<head>
    <title>CRUD PDO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
    
    <h1 align="center">Registro</h1>
    
    <div class="container">
        <form method="post" action="guardarContacto.php">
             
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" id="Nombre" class="form-control" name="nombres" placeholder="Ingrese el nombre de la persona" require="true"/>  
            </div>
            
            <div>
                
            </div>
            
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="number" id="tele" name="telefono" class="form-control" placeholder="Digite el telefono (fijo) de la persona" require="true"/>
            </div>
            
            <div>
                
            </div>
            
            <div>
                <input type="submit" class="btn btn-info" value="Guardar"/>
                <input type="reset" class="btn btn-info" value="Cancelar"/>
            </div>
            
        </form>
    </div>
</body>
</html>