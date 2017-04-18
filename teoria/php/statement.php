
<?php

include '../../connection/connection.php';

$nome = "Pippo";
$cognome = "Baudo";
$data_nascita = "1970-03-21";
$ruolo = "3";
 
// preparazione del template
$pst = $connessione->prepare("INSERT INTO calciatore VALUES (?, ?, ?, ?)");
// variabili per la sostituzione dei placeholder
$pst->bind_param( $nome, $cognome, $data_nascita, $ruolo);

// esecuzione dell’istruzione
$pst->execute();
// chiusura dello statement
$pst->close();


?>