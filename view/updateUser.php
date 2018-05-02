<?php

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
</head>
<body>


<div class="container">
  <h1>Actualizacion</h1>
  
  <h2>Datos</h2>
  
  <form class="form-inline" method="post" action="modificar.php">
          
        <div class="form-group">
          <label>Codigo</label>
          <input class="form-control" id="disabledInput" type="Number"  name="ids" value ="<?php echo $codigo; ?>" readonly="readonly">
        </div>
        
       <div class="form-group">
          <label for="focusedInput">Nombre</label>
          <input class="form-control" id="focusedInput" type="text" name="nombres" value="<?php echo $Nombre;?>">
        </div>
        
        
        <div class="form-group">
          <label for="focusedInput">Telefono</label>
          <input class="form-control" id="focusedInput" type="Number"  name="telefono" value ="<?php echo $Telefono;?>">
        </div>
        
        <div>
            <input type="submit" class="btn btn-info" value="Modificar"/> <buttom class='btn btn-info' onclick=javascript:window.history.back()>Regresar</buttom>
        </div>
    
  </form>
  
</body>
<html>