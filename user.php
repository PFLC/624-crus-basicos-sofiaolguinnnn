<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Usuario | PHP CRUD</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container mx-auto mt-12">
    <div class="flex justify-center items-center">
      <form action="user.php" method="POST" class="w-1/2">
        <div class="flex flex-col mb-4">
          <label for="name" class="mb-2 font-bold text-lg text-gray-900">Nombre</label>
          <input type="text" name="name" id="name" placeholder="Nombre"
            class="border-2 border-gray-400 p-2 rounded-lg focus:outline-none focus:border-green-500" required>
        </div>
        <div class="flex flex-col mb-4">
          <label for="email" class="mb-2 font-bold text-lg text-gray-900">Correo Electrónico</label>
          <input type="email" name="email" id="email" placeholder="Correo Electrónico"
            class="border-2 border-gray-400 p-2 rounded-lg focus:outline-none focus:border-green-500" required>
        </div>
        <div class="flex flex-col mb-4">
          <label for="mobile" class="mb-2 font-bold text-lg text-gray-900">Móvil</label>
          <input type="tel" name="mobile" id="mobile" placeholder="Móvil"
            class="border-2 border-gray-400 p-2 rounded-lg focus:outline-none focus:border-green-500" required>
        </div>
        <div class="flex flex-col mb-4">
          <label for="password" class="mb-2 font-bold text-lg text-gray-900">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Contraseña"
            class="border-2 border-gray-400 p-2 rounded-lg focus:outline-none focus:border-green-500" required>
        </div>
        <div class="flex flex-col mb-4">
          <button type="submit" name="submit"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Enviar</button>
        </div>
      </form>
    </div>
</body>

</html>

<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "INSERT INTO crud (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Usuario agregado exitosamente.')</script>";
  } else {
    echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
  }
  mysqli_close($conn);
}
?>
