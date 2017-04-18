
<?php

include '../../connection/connection.php';

$nome = "Pippo";
$cognome = "Baudo";
$data_nascita = "1970-03-21";
$ruolo = "3";
 
$query = "INSERT INTO calciatore (nome, cognome, data_nascita,ruolo) VALUES ('$nome','$cognome','$data_nascita',$ruolo)";
 
// Esecuzione della query e controllo degli eventuali errori
if (!$connessione->query($query)) {
    die($connessione->error);
}else{
    echo 'inserimento riuscito';
}

?>