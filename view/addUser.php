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
    
    <!-- Form-->
    <h1 align="center">Registry</h1>
    
    <div class="container">
        
        <form method="post" action="../controllers/Add.php">
             
             
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                <input type="text"  class="form-control" name="name" placeholder="Add your name" require="true"/>  
            </div>
            
            <div class="form-group"></div>
          
           <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="number"  name="phone" class="form-control" placeholder="Add your phone" require="true"/>
            </div>
            
            <div class="form-group"></div>
            
           <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text"  name="user" class="form-control" placeholder="Add your user" require="true"/>
            </div>
            
            <div class="form-group"></div>
            
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
                <input type="password"  name="pass" class="form-control" placeholder="Add your password" require="true"/>
            </div>
            
            <div class="form-group"></div>
            
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                <input type="password" class="form-control" name="pass_confir" class="form-control" placeholder="Add your password again" require="true"/>
            </div>
            
            <div class="form-group"></div>
            
            <div>
                <input type="submit" class="btn btn-info" value="Save"/>
                <a class="navbar-brand" href="main.php"><buttom class='btn btn-info'>back</buttom></a>
            </div>
            
        </form>
        
    </div>
    
</body>
</html>