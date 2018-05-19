<?php

session_start();
session_destroy();
header("Location:../view/index.php?c5=session");

?>