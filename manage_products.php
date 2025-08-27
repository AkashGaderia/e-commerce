<?php
include 'db.php';

// Database connection
<?php include 'db.php'; ?>

// Add Product
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $category = $_POST['category_id'];
    $query = "INSERT INTO products (name, price, description, category_id) VALUES ('$name','$price','$desc','$category')";
    mysqli_query($conn, $query);
}

// Delete Product
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM products WHERE product_id=$id");
}
?>

<h2>Manage Products</h2>
<form method="POST">
  <input type="text" name="name" placeholder="Product Name" required>
  <input type="number" step="0.01" name="price" placeholder="Price" required>
  <textarea name="description" placeholder="Description"></textarea>
  <input type="number" name="category_id" placeholder="Category ID">
  <button type="submit" name="add">Add Product</button>
</form>

<table border="1">
  <tr><th>ID</th><th>Name</th><th>Price</th><th>Action</th></tr>
  <?php
  $res = mysqli_query($conn, "SELECT * FROM products");
  while($row = mysqli_fetch_assoc($res)){
      echo "<tr>
        <td>{$row['product_id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['price']}</td>
        <td>
          <a href='?delete={$row['product_id']}'>Delete</a>
        </td>
      </tr>";
  }
  ?>
</table>
