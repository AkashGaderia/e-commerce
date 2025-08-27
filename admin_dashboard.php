
<?php include 'db.php'; ?>

<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<h1>Welcome Admin</h1>
<ul>
  <li><a href="manage_products.php">Manage Products</a></li>
  <li><a href="manage_categories.php">Manage Categories</a></li>
  <li><a href="view_orders.php">View Orders</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
