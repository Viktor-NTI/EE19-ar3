<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Sann Historia</h1>
        <?php
        // Ta emot data som skickas
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $gtag = filter_input(INPUT_POST, 'gtag', FILTER_SANITIZE_STRING);
        $spel = filter_input(INPUT_POST, 'spel', FILTER_SANITIZE_STRING);
        $karaktar = filter_input(INPUT_POST, 'karaktar', FILTER_SANITIZE_STRING);
        $nummer = filter_input(INPUT_POST, 'nummer', FILTER_SANITIZE_STRING);

        echo "Välkommen till episod $nummer av bloggen, mitt namn är $namn och ni känner mig som $gtag. Som ni vet så skriver jag min fanfiction om $spel. Jag har tänkt att lägga till $karaktar i storyn för att göra det lite spicy, vem vet vad som kan hända då?";
    
        ?>
    </div>
</body>
</html>