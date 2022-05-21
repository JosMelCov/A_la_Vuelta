<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>coneccion</title>
</head>

<body>
<?php
function conectarse(){
$servidor="localhost";
$usuario="root";
$password="";
$db="a_la_vuelta";
$conectar=new mysqli($servidor,$usuario,$password,$db) or die ("No se puede conectar a la base de datos");
return $conectar;
}
$conexion=conectarse();
?>
</body>
</html>
