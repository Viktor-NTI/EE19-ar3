<?php
include "konfigdb.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kontainer">
        <h1>Harry potter filmer</h1>
        <?php
        // 2. SQL-satsen vi vill köra
        $sql = "SELECT titel, datum FROM movies WHERE titel like \"%Harry%\"";
    
        // 3. Be mysql-servern köra frågan
        $result = $conn->query($sql);
    
        // Gick det bra
        if (!$result) {
          die("Oh no! SQL-satsen, it broken");
        } else {
          //echo "SQL-satsen lookin fine as hell";

          //var_dump($result);
          while ($rad = $result->fetch_assoc()) {
            echo "<p>$rad[datum] $rad[titel]</p>";
          }
        }
        ?>
</div>
</body>
</html>