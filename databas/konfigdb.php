<?php
// Aktivera felmeddelanden under utveckling
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

// Uppgifter för att logga in i mysql-databasen
$user = "movies_db";
$pass = "AIgwEPIGqdJh./C_";
$host = "localhost";
$databas = "movies_db";

// 1. Logga in
$conn = new mysqli($host, $user, $pass, $databas);

// Gick det att ansluta
if ($conn->connect_error) {
    die ("Oh no! Our database, it broken: " . $conn->connect_error);
} else {
    //echo "Poggo! were in bois!";
}

?>