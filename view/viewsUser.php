<!DOCTYPE html>
<html>

<head>
    <title>CRUD PDO</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
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

<div class="container-fluid">
    <table>
        <div class="row">
            <tr>
                <div class="col-sm-3" style="background-color:lavender;">ID</div>
                <div class="col-sm-3" style="background-color:lavender;">NOMBRE</div>
                <div class="col-sm-3" style="background-color:lavender;">TELEFONO</div>
                <div class="col-sm-3" style="background-color:lavender;">OPCIONES</div>
            </tr>
        </div>
        <div>
            
        </div>
        <div class= "row">
            <?php
            
                require("../controllers/Connection.php");
                $pdo = new db();
                
                $user = $pdo->mysql->query("select * from user");
                
                foreach ($user as $usser) 
                {
                    echo"<tr>
                            <div>
                                <div class='col-sm-3' style='background-color:lavenderblush;'>{$user['Id']}</div>
                            </div>
                            <div>
                                <div class='col-sm-3' style='background-color:lavenderblush;'>{$user['Name']}</div>
                            </div>
                            <div>
                            <div class='col-sm-3' style='background-color:lavenderblush;'>{$user['Phone']}</div>
                            </div>
                            <div>
                            <div class='col-sm-3' style='background-color:lavenderblush;'><a href='modificarUsser.php?ID={$user['Id']}'><button class='btn btn-warning'>MODIFICAR</button></a> <a href='eliminarUsser.php?ID={$usser['ID']}'><button class='btn btn-danger'>ELIMINAR</button></a></div>
                            </div>
                        </tr>";   
                }
            ?>
        </div>
        
    </table>
</div>
</body>
</html>