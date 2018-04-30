<!DOCTYPE html>
<html>

<head>
    <title>CRUD PDO</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
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