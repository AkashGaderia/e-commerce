<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']); // hashing

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password' AND role='admin'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['admin'] = $email;
        header("Location: admin_dashboard.php");
    } else {
        echo "Invalid Credentials!";
    }
}
?>
<form method="POST">
  <h2>Admin Login</h2>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit" name="login">Login</button>
</form>
