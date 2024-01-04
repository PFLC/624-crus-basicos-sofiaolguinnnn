<?php
include 'connect.php';
$id = $_GET['id'];

$sql = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row["id"];
$name = $row["name"];
$email = $row["email"];
$mobile = $row["mobile"];
$password = $row["password"];

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "UPDATE crud SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('User updated successfully.')</script>";
    header("location: display.php");
  } else {
    echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
  }
  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User | PHP CRUD</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container mx-auto mt-12">
    <div class="flex justify-center items-center">
      <form action="edit.php" method="POST" class="w-1/2">
        <div class="flex flex-col mb-4">
          <label for="name" class="mb-2 font-bold text-lg text-gray-900">Name</label>
          <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>"
            class="border-2 border-gray-400 p-2 rounded-lg focus:outline-none focus:border-green-500" required>
        </div>
        <div class="flex flex-col mb-4">
          <label for="email" class="mb-2 font-bold text-lg text-gray-900">Email</label>
          <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>"
            class="border-2 border-gray-400 p-2 rounded-lg focus:outline-none focus:border-green-500" required>
        </div>
        <div class="flex flex-col mb-4">
          <label for="mobile" class="mb-2 font-bold text-lg text-gray-900">Mobile</label>
          <input type="tel" name="mobile" id="mobile" placeholder="Mobile" value="<?php echo $mobile; ?>"
            class="border-2 border-gray-400 p-2 rounded-lg focus:outline-none focus:border-green-500" required>
        </div>
        <div class="flex flex-col mb-4">
          <label for="password" class="mb-2 font-bold text-lg text-gray-900">Password</label>
          <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>"
            class="border-2 border-gray-400 p-2 rounded-lg focus:outline-none focus:border-green-500" required>
        </div>
        <div class="flex flex-col mb-4">
          <button type="submit" name="submit"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Submit</button>
        </div>
      </form>
    </div>
</body>

</html>