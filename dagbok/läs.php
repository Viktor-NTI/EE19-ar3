<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Läs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="dagbok.php">Dagbok</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="läs.php">Läs</a>
            </li>
        </ul>
        <?php
        $texten = file_get_contents("spara.txt");

        echo "<p>Inläggen är</p>";
        echo "<pre>$texten</pre>";
        ?>
</body>
</html>