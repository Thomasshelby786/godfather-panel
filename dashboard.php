<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Godfather</title>
  <style>
    body { background: #111; color: #fff; font-family: sans-serif; padding: 10px; }
    .container { max-width: 100%; margin: auto; }
    h1 { color: #ffcc00; text-align: center; }
    table { width: 100%; border-collapse: collapse; background: #222; margin-top: 20px; }
    th, td { padding: 10px; border: 1px solid #444; text-align: center; }
    th { background: #333; color: #ffcc00; }
    form { margin-top: 20px; }
    input[type="text"], button { padding: 10px; width: 100%; margin-top: 10px; }
    button { background: #ffcc00; color: #000; font-weight: bold; border: none; border-radius: 5px; }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <form method="GET" action="search.php">
      <input type="text" name="query" placeholder="Search user..." />
      <button type="submit">Search</button>
    </form>
    <table>
      <tr><th>ID</th><th>Username</th><th>Status</th></tr>
      <tr><td>1</td><td>admin</td><td>Active</td></tr>
      <tr><td>2</td><td>sonny</td><td>Inactive</td></tr>
      <tr><td>3</td><td>tom</td><td>Pending</td></tr>
    </table>
  </div>
</body>
</html>
