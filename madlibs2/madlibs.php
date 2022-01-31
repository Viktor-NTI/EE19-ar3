<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Madlibs</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Madlibs</h1>
        <?php
        // Ta emot data som skickas
        $adjective = filter_input(INPUT_POST, 'adjective', FILTER_SANITIZE_STRING);
        $verbIng = filter_input(INPUT_POST, 'verbIng', FILTER_SANITIZE_STRING);
        $food = filter_input(INPUT_POST, 'food', FILTER_SANITIZE_STRING);
        $noun = filter_input(INPUT_POST, 'noun', FILTER_SANITIZE_STRING);
        $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
        $bodypart = filter_input(INPUT_POST, 'bodypart', FILTER_SANITIZE_STRING);

        //Innehåller variablerna text då skriver vi ut madlibs
        if ($adjective && $verbIng && $food && $noun && $number && $bodypart)
            //Ett lager av olika verb
            $verben = ["eat", "love", "walk", "run", "swim", "talk", "clean", "kill", "shoot", "cope", "read", "write"];
            //Slumpa fram ett verb
            echo $rand(0, 12);
        // Skriv ut madlibs-texten
        echo "<p><strong>Mario:</strong> What a/an $adjective day, eh Luigi?The perfect day for $verbIng some Koopas. The $food Kingdom is crawling with them!</p>
        <p><strong>Luigi:</strong> You're right about that, dear $noun. I hope you're ready to " . $verben[rand(0, 12)] . ".</p>
        <p><strong>Mario:</strong> Ready? I've waited $number years to " . $verben[rand(0, 12)] . " that scoundrel Bowser!</p>
        <p><strong>Luigi:</strong> Pipe down. He has $bodypart everywhere.</p>
        <p><strong>Mario:</strong> First, I'll " . $verben[rand(0, 12)] . " and grab a/an $food. That'll give me $noun.</p>";
        ?>
    </div>
</body>
</html>