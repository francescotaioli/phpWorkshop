<?php
include '../connection/connection.php';

// la superglobals and $_POSTè usata per prendere i dati
// nel form html abbiamo l'attributo name
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$data = $_POST['date'];
$ruolo = $_POST['role'];
		
$sql = "INSERT INTO calciatore (nome, cognome, data_nascita,ruolo) 
VALUES ('$nome', '$cognome', '$data', '$ruolo')";

if ($connessione->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connessione->error;
}

$connessione->close();

?>