<?php
// Establece las variables para la conexión a la base de datos
$HOSTNAME = 'localhost';  // La dirección del servidor de la base de datos. En este caso, es localhost porque la base de datos está en el mismo servidor que el script PHP.
$USERNAME = 'admin';       // El nombre de usuario de la base de datos.
$PASSWORD = '';            // La contraseña de la base de datos. En este caso, está vacía.
$DATABASE = 'phpcrud';     // El nombre de la base de datos a la que se desea conectar.

// Se establece la conexión a la base de datos utilizando la función mysqli_connect.
$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

// Se verifica si la conexión fue exitosa.
if (!$conn) {
  // Si la conexión falla, se muestra un mensaje de error y se termina la ejecución del script usando die().
  die("Connection failed: " . mysqli_connect_error());
}
?>
