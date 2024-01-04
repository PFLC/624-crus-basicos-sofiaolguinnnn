<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display | PHP CRUD</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container mx-auto mt-12">
    <div class="flex justify-center items-center my-8">
      <a href="user.php" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add User</a>
    </div>
    <div class="flex justify-center items-center">
      <table class="table-auto">
        <thead>
          <tr>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Mobile</th>
            <th class="px-4 py-2">Password</th>
            <th class="px-4 py-2">Edit</th>
            <th class="px-4 py-2">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'connect.php';
          $sql = "SELECT * FROM crud";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td class='border px-4 py-2'>" . $row['id'] . "</td>";
              echo "<td class='border px-4 py-2'>" . $row['name'] . "</td>";
              echo "<td class='border px-4 py-2'>" . $row['email'] . "</td>";
              echo "<td class='border px-4 py-2'>" . $row['mobile'] . "</td>";
              echo "<td class='border px-4 py-2'>" . $row['password'] . "</td>";
              echo "<td class='border px-4 py-2'><a href='edit.php?id=" . $row['id'] . "' class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>Edit</a></td>";
              echo "<td class='border px-4 py-2'><a href='delete.php?id=" . $row['id'] . "' class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded'>Delete</a></td>";
              echo "</tr>";
            }
          } else {
            echo "<script>alert('0 Results')</script>";
          }
          mysqli_close($conn);
          ?>
        </tbody>
</body>

</html>