<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Vi ska regristrera hur mycket mina anställda ska få i lön denna månad
    // Skapa en klass, Personinkomst
    // Egenskaperna: förnamn, efternamn, timlön, antal timmar
    class Personinkomst
    {
        public $fnamn = "";
        public $enamn = "";
        public $timlön = 0;
        public $antalTimmar = 0;

        public function __construct($f, $e, $t, $a)
        {
            $this->fnamn = $f;
            $this->enamn = $e;
            $this->timlön = $t;
            $this->antalTimmar = $a;
        }

        // Metoder
        public function SkrivUtLön()
        {
            $lön = $this->timlön * $this->antalTimmar;
            echo "<p>$this->fnamn $this->enamn månadslön är $lön kr</p>";
        }
    }

    // Regristrera två anställda
    $anställd1 = new Personinkomst("Tobias", "Pisser", 50, 4);

    $anställd2 = new Personinkomst("Jagob", "Giller", 5000, 5);

    // Skriv ut lönerna
    $anställd1->SkrivUtLön();
    $anställd2->SkrivUtLön();
    ?>
</body>
</html>