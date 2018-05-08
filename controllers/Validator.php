<?php

session_start();

require_once '../class/User.php';

use clases_pdo\User;
$users = new User();


if (empty($_POST['user']) || empty($_POST['pass'])) 
{
    header("Location:../view/index.php?c1=error");    
}else
    {
        $user = $_POST['user'];
        $contra = $_POST['pass'];
        
        
        $result = $users->selectVali($user);
        

        
    }

