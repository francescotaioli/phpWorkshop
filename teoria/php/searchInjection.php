
<?php
/*
Parametri sql injection:
- Marco' OR 1='1
*/

include '../../connection/connection.php';

//var_dump($_POST);

$ricerca = $_POST['ricerca'];

$sql = "SELECT * from calciatore WHERE nome='$ricerca';";

echo $sql . '<br>';

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