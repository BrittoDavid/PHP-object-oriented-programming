<?php

session_start();

require_once '../class/User.php';

use clases_pdo\User;
$users = new User();

if (!isset($_POST['user']) || !isset($_POST['pass']))
{
    header("Location:../view/index.php?c1=error");
}else if (empty($_POST['user']) || empty($_POST['pass'])) 
        {
             header("Location:../view/index.php?c2=error");    
        }else
        {
            
            $user = $_POST['user'];
            $contra = $_POST['pass'];
            
            
            $result = $users->selectVali($user);
            
            if ($result['User'] == $user)
            {
                if ($result['Password'] == $contra )
                {
                    $_SESSION['Name'] = $result['Name'];
                    header("Location:../view/main.php");
                }else{
                    header("Location:../view/index.php?c3=error");
                }
            }else{
                echo "el usuario no es correcto";
            }
            
            
        }

