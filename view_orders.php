<?php
include 'db.php';

// Database connection
<?php include 'db.php'; ?>

$res = mysqli_query($conn, "SELECT * FROM orders");
?>
<h2>Orders</h2>
<table border="1">
<tr><th>ID</th><th>User</th><th>Total</th><th>Status</th><th>Date</th></tr>
<?php while($row = mysqli_fetch_assoc($res)){
  echo "<tr>
    <td>{$row['order_id']}</td>
    <td>{$row['user_id']}</td>
    <td>{$row['total_price']}</td>
    <td>{$row['status']}</td>
    <td>{$row['created_at']}</td>
  </tr>";
} ?>
</table>
