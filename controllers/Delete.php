<?php

    require ("../class/User.php");
    use  clases_pdo\User;
    $user = new User();
    $id = $_GET['Id'];
    $user->deleteUser($id);
    header("Location:../view/viewsUser.php");
    
    