<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP OOP tutorial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // Skapa en första klass (mall)
    class User
    {
        // Egenskaper = variabler
        public $username = "Omba";
        public $email = "omba@mail.com";

        //konstruktor
        public function_construct($username, $email) 
        {
            $this->username = $username;
            $this->email = $email;
        }

        // Metoder = funktioner
        public function AddFriend()
        {
            return "Added new friend";
        }
    }

    // Skapa ett första objekt från klassen User
    // New skapar en instans (objekt) = $userOne
    $userOne = new User("Omba", "omba@gmail.com");

    // Skapa ett andra objekt från klassen User
    $userTwo = new User("speed", "mcspeed@gmail.uwu");

    echo '<p>$userOne är av klassen ' . get_class($userOne) . '</p>';
    echo '<p>$userTwo är av klassen ' . get_class($userTwo) . '</p>';

    // Hur kommer vi åt egenskaperna?
    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->AddFriend() . '<br>';

    ?>
</body>

</html>