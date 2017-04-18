
<?php

include '../../connection/connection.php';

// preparazione del template
$pst = $connessione->prepare("INSERT INTO calciatore(nome, cognome, data_nascita,ruolo) VALUES (?, ?, ?, ?)");
// variabili per la sostituzione dei placeholder
//s -> string
$pst->bind_param("ssss" , $nome, $cognome, $data_nascita, $ruolo);

// set parameters and execute
$nome = "Baudo";
$cognome = "Baudo";
$data_nascita = "1970-03-21";
$ruolo = "3";
$pst->execute();

echo "inserito";
// chiusura dello statement
$pst->close();


?>