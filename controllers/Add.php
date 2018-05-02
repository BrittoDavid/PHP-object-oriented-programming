<?php

 function is_valid_name($name)
    {   
        if (empty($name)) 
        {
             echo"Error,campo vacio <br>";
             echo "<br>";
             echo "<a href = '#' onclick=javascript:window.history.back()>Regresar</a>";
             exit;
        }else if (ctype_alpha($name))
        {
           return $name;
        }else
        {
            echo"error, campo nombre digitado de manera incorrecta <br>";
            echo "<br>";
            echo "<a href = '#' onclick=javascript:window.history.back()>Regresar</a>";
            exit;
        }
        
    }

function is_valid_phone($pho)
    {
        if (empty($pho)) 
        {
             echo"Error,campo vacio <br>";
             echo "<br>";
             echo "<a href = '#' onclick=javascript:window.history.back()>Regresar</a>";
             exit;
        }else if (is_numeric($pho))
        {
            $vali = strlen($pho);
            if ($vali < 7) 
            {
                echo"error, campo telefono digitado de manera incorrecta no puede ser menor a 7 numeros <br>";
                echo "<br>";
                echo "<a href = '#' onclick=javascript:window.history.back()>Regresar</a>";
                exit;
            }else if ($vali > 10) {
                
                echo"error, campo telefono digitado de manera incorrecta no puede ser mayor a 10 numeros <br>";
                echo "<br>";
                echo "<a href = '#' onclick=javascript:window.history.back()>Regresar</a>";
                exit;
            }else
            {
                 return $pho;
            }
        }else 
        {
            echo"error, campo telefono digitado de manera incorrecta <br>";
            echo "<br>";
            echo "<a href = '#' onclick=javascript:window.history.back()>Regresar</a>";
            exit;
        }
    }
    
    
function is_confirm_pass($pass,$pass_b)
    {
        if ($pass == $pass_b) 
        {
            return $pass;
        }else
        {
            echo"error, Las contraseñas no son iguales, por favor verifique nuevamente<br>";
            echo "<br>";
            echo "<a href = '#' onclick=javascript:window.history.back()>Regresar</a>";
            exit;
        }
    }


 use clases_pdo\User;
 require_once('../class/User.php');

 
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $User = $_POST['user'];
 $pass = $_POST['pass'];
 $pass_b = $_POST['pass_confir'];
 
 $Nombre =  is_valid_name($name);
 $Telefono = is_valid_phone($phone);
 $Correo = is_confirm_pass($pass,$pass_b);
 
 $user = new User();
 $result = $user->addUser($Nombre,$Telefono,$User,$Correo);
 header("Location:../view/viewsUser.php");