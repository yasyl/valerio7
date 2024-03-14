<?php
$A = mysqli_connect("localhost", "root","", "login");


$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

mysqli_query ($A, "INSERT INTO clientes VALUES('','$nombre','$clave')");


?>