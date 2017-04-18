<?php
include '../connection/connection.php';

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$data = $_POST['date'];
$ruolo = $_POST['role'];
		
$sql = "INSERT INTO calciatore (nome, cognome, data_nascita,ruolo) 
VALUES ('$nome', '$cognome', '$data', '$ruolo')";

if ($connessione->query($sql) === TRUE) {
    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $connessione->error;
}

$connessione->close();

?>