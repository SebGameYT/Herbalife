<?php
$conexion = mysqli_connect("localhost", "root", "sebgameYT1012", "e_solar")or die
("Problemas con la conexion.");

mysqli_query($conexion, "INSERT into usuarios(Nombre, Ap, Am, Email, Clave, R_Clave)values
('$_REQUEST[Nombre]', '$_REQUEST[Ap]', '$_REQUEST[Am]', '$_REQUEST[Email]', '$_REQUEST[Clave]', '$_REQUEST[R_Clave]')")or die
("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo("Te has registrado correctamente.");
?>