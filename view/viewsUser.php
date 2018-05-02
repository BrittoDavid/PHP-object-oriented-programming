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
    <h1>LIST USERS</h1>
        
        <a href="main.php">back</a>
        
        
        <div class="container">
            
<<<<<<< HEAD
                require("../controllers/Connection.php");
                $pdo = new db();
                
                $user = $pdo->mysql->query("select * from user");
                
                foreach ($user as $user) 
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
=======
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">TELEFONO</th>
                      <th scope="col">USUARIO</th>
                      <th scope="col">CONTRASEÑA</th>
                      <th scope="col" colspan="2">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                 <?php
                    
                        require("../class/User.php");
                        use clases_pdo\User;
                        $users = new User();
                        $result = $users -> getUsers();
                        
                        foreach ($result as $user) 
                        {
                ?>
                                        <tr>
                                              <th scope="row"><?php echo $user['Id']?></th>
                                              <td><?php echo $user['Name']?></td>
                                              <td><?php echo $user['Phone']?></td>
                                              <td><?php echo $user['User']?></td>
                                              <td><?php echo $user['Password']?></td>
                                              <td><a href="../controllers/Delete.php?id=<?php echo $user['Id'] ?>" class="btn btn-danger">delete</a></td>
                                              <td><a href="listusers.php?id=<?php echo $user['Id'] ?>" class="btn btn-success">Update</a></td>
                                        </tr>
                            
                        <?php
                        }
                    ?>
                </tbody>
            </table>
>>>>>>> view
        </div>
</body>
</html>