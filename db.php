<?php
$conexion = mysqli_connect("localhost", "root", "sebgameYT1012", "p_herbalife")or die
("Problemas con la conexion.");

mysqli_query($conexion, "INSERT into usuarios(nombre, apellidos, n_cel, email, mensaje)values
('$_REQUEST[nombre]', '$_REQUEST[apellidos]', '$_REQUEST[n_cel]', '$_REQUEST[email]', '$_REQUEST[mensaje]')")or die
("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo("Tus datos y mensaje se han enviado correctamente, puedes cerrar esta pestaña.");
?>