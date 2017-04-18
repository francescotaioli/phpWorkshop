<?php
 //includo la connessione in modo da non riscriverla più volte
include '../../connection/connection.php';

$sql = "SELECT * from calciatore INNER JOIN ruolo on id_ruolo = ruolo";
$result = $connessione->query($sql);

//se il numero delle righe è > 0 ciclo sulle righe assegnando alla variabile row l'oggetto del record 
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_object()) {     

        echo $row->nome . ' ' . $row->cognome;
        echo '<br>';
        }

} else {
    echo "Nessun risultato";
}

// Anche se non necessario è buona cosa esplicitare la chiusura della connessione al database
 
$connessione->close();
?>