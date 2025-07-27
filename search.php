<?php
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $results = ["admin", "sonny", "tom"];
    $filtered = array_filter($results, fn($name) => stripos($name, $query) !== false);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search - Godfather</title>
  <style>
    body { background: #111; color: #fff; font-family: sans-serif; padding: 20px; }
    h2 { color: #ffcc00; }
    ul { background: #222; padding: 15px; border-radius: 8px; }
    li { padding: 5px 0; }
  </style>
</head>
<body>
  <h2>Search Results</h2>
  <ul>
    <?php foreach ($filtered ?? [] as $name) echo "<li>$name</li>"; ?>
    <?php if (empty($filtered)) echo "<li>No results found</li>"; ?>
  </ul>
</body>
</html>
