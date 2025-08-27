<?php
include 'db.php';

// Database connection
<?php include 'db.php'; ?>


// Add Category
if(isset($_POST['add'])){
    $name = $_POST['category_name'];
    mysqli_query($conn, "INSERT INTO categories (category_name) VALUES ('$name')");
}
?>

<h2>Manage Categories</h2>
<form method="POST">
  <input type="text" name="category_name" placeholder="Category Name" required>
  <button type="submit" name="add">Add Category</button>
</form>

<table border="1">
  <tr><th>ID</th><th>Name</th></tr>
  <?php
  $res = mysqli_query($conn, "SELECT * FROM categories");
  while($row = mysqli_fetch_assoc($res)){
      echo "<tr>
        <td>{$row['category_id']}</td>
        <td>{$row['category_name']}</td>
      </tr>";
  }
  ?>
</table>
