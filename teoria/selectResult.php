<?php
 //includo la connessione in modo da non riscriverla più volte
include '../connection/connection.php';

$sql = "SELECT * from calciatore INNER JOIN ruolo on id_ruolo = ruolo";
$result = $connessione->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_object()) {
                
        echo $row->nome . ' ' . $row->cognome;
        echo '<br>';

        }

} else {
    echo "Nessun risultato";
}

 $connessione->close();
 ?>