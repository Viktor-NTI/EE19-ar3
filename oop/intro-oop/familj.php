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
    // Skapa en klass, Familj
    // Med två egenskaper, förnamn och efternamn
    class Familj {
        public $fnamn = "Viktor";
        public $enamn = "Larson";

        // konstruktor
        public function __construct($f, $e)
        {
            $this->fnamn = $f;
            $this->enamn = $e;
        }
    }

    // Skapa 2 instanser av klassen Familj för 2 av din egen Familj
    $far = new Familj("Peter", "Larson");
    $bror = new Familj("Erik", "Helmer");
    ?>

</body>
</html>