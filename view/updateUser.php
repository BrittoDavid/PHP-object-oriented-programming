<?php
    session_start();
    require_once '../class/User.php';
    use clases_pdo\User;
    
    if (!isset($_SESSION["Name"])) {
    header("Location:index.php?c4=error");
} else {
  
    $users = new User();
    $id = $_GET['Id'];
    $result = $users->selectUser($id);
?>

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
        
        <a class="navbar-brand" href="main.php"><hi><?php echo $_SESSION["Name"]; ?></hi></a>
        
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
              <a class="nav-link" href="../controllers/DestroySession.php">Sign out</a>
            </li>
            
          </ul>
          
        </div>
      </nav>

  <div class="container">  
  
    <h1 align="center">Actualizacion</h1>
    
    <h2 align="center">Datos</h2>
    
    <form class="form-inline" method="post" action="../controllers/Update.php">
          
          <?php 
            
            foreach ($result as $result) {
              
          ?>
          
          <div class="form-inline">
            <label>Codigo</label>
            <div class="col-sm-10">
              <input class="form-control" id="disabledInput" type="Number"  name="id" value ="<?php echo $result['Id'] ?>" readonly="readonly">
            </div>
          </div>
          
         <div class="form-inline">
            <label for="focusedInput">Nombre</label>
            <div class="col-sm-10">
              <input class="form-control" id="focusedInput" type="text"  name="nombre" value="<?php echo $result['Name'] ?>" >
            </div>
          </div>
          
          
          <div class="form-group">
            <label for="focusedInput">Telefono</label>
            <div class="col-sm-10">
              <input class="form-control" id="focusedInput" type="Number"  name="telefono" value ="<?php echo $result['Phone'] ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label for="focusedInput">Usuario</label>
            <div class="col-sm-10">
              <input class="form-control" id="focusedInput" type="text"  name="usuario" value ="<?php echo $result['User'] ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label for="focusedInput">Contraseña</label>
            <div class="col-sm-10">
              <input class="form-control" id="focusedInput" type="Number"  name="contra" value ="<?php echo $result['Password'] ?>">
            </div>
          </div>
          
    </div>
    
    <br>
    
    <div class="container">
      
    
          
          <div>
              <input type="submit" class="btn btn-info" value="Modificar"/> <buttom class='btn btn-info' onclick=javascript:window.history.back()>Regresar</buttom>
          </div>
      
    </form>
    
    </div>

    <?php
          }
    ?>
</body>
<html>
  
<?php
}
?>