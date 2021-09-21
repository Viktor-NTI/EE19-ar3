<?php

// Ta emot data från formuläret
$echo = $_POST ["namn"];
$echo = $_POST ["adress"];
$echo = $_POST ["mobil"];

// Om namnet är Oller
if ($namn == "Olle") {
    echo "<p>Hej vad trevligt att du är tillbaka</p>";
} else {
    echo "<p>Hej, du är ny här</p>";
}
