<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Variabler i PHP</h1>
    <?php
    $förnamn = "Viktor";
    $efternamn = "Larson";

    //echo $förnamn . " " . $efternamn;
    echo "Mitt namn är $förnamn $efternamn <br>";
    echo "Today's date is " . date("l d F Y") . "<br>";

    setlocale(LC_ALL, "sv_SE.utf8");
    echo "Dagens datum är " . strftime("%A %B %Y");
    ?>
</body>
</html>