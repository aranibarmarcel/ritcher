
<?php
/*Conexion con base de datos*/
$servidor ="localhost";
$usuario="root";
$contrasena="";
$baseDatos="ritcher";
$conexion=new mysqli($servidor,$usuario,$contrasena,$baseDatos);



if ($conexion){
}
else{
     echo "error";
}
?>