<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Elenco Calciatori</title>

     <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
</head>

<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.html">Elenco calciatori</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="inserisci.php">Inserisci</a></li>
      <li><a href="#">Modifica</a></li>
    
    </ul>
  </div>
</nav>



<!--SEZIONE PER VISUALIZZARE I CALCIATORI-->
<div class="container">
  <h2>Calciatori</h2>
  <p>Ecco i calciatori e i relativi ruoli</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Data di Nascita</th>
        <th>Ruolo</th>
      </tr>
    </thead>
    <tbody>

            <?php
            //includo la connessione in modo da non riscriverla più volte
            include '../connection/connection.php';

            $sql = "SELECT * from calciatore INNER JOIN ruolo on id_ruolo = ruolo";
            $result = $connessione->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            
                    echo "<tr>" ;//open tr
                    echo "<td>" .$row["nome"]. "</td>" . "<td>" .$row["cognome"]. "</td>" ."<td>" .$row["data_nascita"]. "</td>" ."<td>" .$row["descrizione"]. "</td>";
                    echo "</tr>";//close tr
                }
            } else {
                echo "0 results";
            }
            $connessione->close();
            ?>


    </tbody>
  </table>
</div>







</body>

</html>