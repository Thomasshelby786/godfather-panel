<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid login.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Godfather</title>
  <style>
    body { background: #111; color: #fff; font-family: sans-serif; padding: 20px; }
    form { background: #222; padding: 20px; border-radius: 8px; max-width: 400px; margin: auto; }
    input, button { width: 100%; padding: 12px; margin: 10px 0; border-radius: 5px; border: none; }
    button { background: #ffcc00; color: #000; font-weight: bold; }
    h2 { text-align: center; color: #ffcc00; }
  </style>
</head>
<body>
  <form method="POST">
    <h2>Godfather Login</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <input type="text" name="username" placeholder="Username" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit">Login</button>
  </form>
</body>
</html>
