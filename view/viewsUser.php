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
    <link rel="stylesheet" href="../css/styles.css" type="text/css" />
</head>
<body> 

   <!--head-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        
        <a class="navbar-brand" href="main.php"><hi>PDO EXAMPLE</hi></a>
        
        <div class="collapse navbar-collapse" id="navbarColor02">
          
          <ul class="navbar-nav mr-auto">
              
            <li class="nav-item active">
              <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="viewsUser.php">To list</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="addUser.php">Create User</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">Sign out</a>
            </li>
            
          </ul>
          
        </div>
      </nav>
      
    <h1 align="center">LIST USERS</h1>

        <div class="container">
            
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">NAME</th>
                      <th scope="col">PHONE</th>
                      <th scope="col">USER</th>
                      <th scope="col">PASSWORD</th>
                      <th scope="col" colspan="2">OPTIONS</th>
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
        
        <a class="navbar-brand" href="main.php"><buttom class='btn btn-info'>back</buttom></a>
    
</body>
</html>