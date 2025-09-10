<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <title>Projekti - Građevinska firma</title>
  <style>
    body { font-family: Arial, sans-serif; }
    h1 { text-align:center; margin:20px; }
    .projekti { display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px; max-width:1100px; margin:auto; }
    .projekt { background:#f4f4f4; border-radius:10px; overflow:hidden; box-shadow:0 2px 5px rgba(0,0,0,0.1); }
    .projekt img { width:100%; height:200px; object-fit:cover; }
    .info { padding:15px; }
    .info h3 { margin:0; color:#0066cc; }
  </style>
</head>
<body>
  <h1>Naši projekti</h1>
  <div class="projekti">
    <?php
      $sql = "SELECT * FROM projekti ORDER BY id DESC";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
        echo "<div class='projekt'>
                <img src='projekti/{$row['slika']}' alt='{$row['naziv']}'>
                <div class='info'>
                  <h3>{$row['naziv']}</h3>
                  <p>{$row['opis']}</p>
                </div>
              </div>";
      }
    ?>
  </div>
</body>
</html>