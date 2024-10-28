<?php
session_start();
unset($_SESSION["idusuario"]);
unset($_SESSION["email"]);
unset($_SESSION['rol']);
header("Location:publico2.php");
session_destroy();
?>