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
                                              <td><a href="../controllers/Delete.php?Id=<?php echo $user['Id'] ?>" class="btn btn-danger">delete</a></td>
                                              <td><a href="updateUser.php?Id=<?php echo $user['Id'] ?>" class="btn btn-success">Update</a></td>
                                        </tr>
                            
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
       


</body>
</html>