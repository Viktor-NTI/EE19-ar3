<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagbok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="dagbok.php">Dagbok</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="läs.php">Läs</a>
        </li>
    </ul>
    <form action="#" method="POST">
        <label>Rubrik</label>
        <input type="text" name="rubrik" required>
        <label>Text</label>
        <textarea name="text" cols="30" rows="10" required></textarea>
        <button>Skicka</button>
    </form>
    <?php
    $rubrik = filter_input(INPUT_POST, "rubrik");
    $text = filter_input(INPUT_POST, "text");

    if ($rubrik && $text) {
        $längd = strlen($text);
        if ($längd >= 10) {
            $texten = "$rubrik\n $text\n";
            file_put_contents("spara.txt", $texten, FILE_APPEND);
            echo "<p>Din text är sparad</p>";
        } else {
            echo "<p>Texten är för kort, minst 10 tecken behövs</p>";
        }
    }
    ?>
</body>

</html>