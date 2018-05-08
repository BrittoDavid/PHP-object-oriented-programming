<?php

    require_once '../class/User.php';
    use clases_pdo\User;
    $users = new User();
    
    $Id  = $_POST['id'];
    $Nombre = $_POST['nombre'];
    $Telefono = $_POST['telefono'];
    $Usuario = $_POST['usuario'];
    $Contra = $_POST['contra'];

    
    $update = $users->updateUser($Id,$Nombre,$Telefono,$Usuario,$Contra);
    
    header("Location:../view/viewsUser.php?d=update");
