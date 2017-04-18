<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calciatori";

// Create connection
$connessione = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connessione->connect_error) {
    die("Connessione fallita: " . $connessione->connect_error);
}
?>