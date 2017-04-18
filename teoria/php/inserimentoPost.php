
<?php

include '../../connection/connection.php';

//var_dump($_POST);

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$data_nascita = $_POST['data_nascita'];
$ruolo = $_POST['ruolo'];
 
$query = "INSERT INTO calciatore (nome, cognome, data_nascita,ruolo) VALUES ('$nome','$cognome','$data_nascita',$ruolo)";
 
//è utile vedere la query che andiamo a fare per risolvere degli errori 
//echo $query;

// Esecuzione della query e controllo degli eventuali errori
if (!$connessione->query($query)) {
    die("Errore: " . $connessione->error);
}else{
    echo 'inserimento con parametri riuscito';
}


?>