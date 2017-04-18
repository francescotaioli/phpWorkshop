<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Elenco Calciatori</title>

     <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
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
      <li class="active"><a href="#">Inserisci</a></li>
      <li><a href="visualizza.php">Visualizza</a></li>
    
    </ul>
  </div>
</nav>





<div class="container">
  <h2> Inserisci calciatore</h2>
  <form id="inserisci-calciatore" role="form" >
    <!--nome-->
    <div class="form-group row">
      <label for="nome" class="col-sm-2 col-form-label">Nome</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="nome" placeholder="nome" name="nome">
      </div>
    </div>
    <!--cognome-->
    <div class="form-group row">
      <label for="cognome" class="col-sm-2 col-form-label">Cognome</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="cognome" placeholder="Cognome" name="cognome">
      </div>
    </div>

    <!--data-->
    <div class="form-group row">
      <label for="data" class="col-sm-2 col-form-label">Scegli la data</label>
      <div class="col-sm-7 ">
        <input type="date" class="form-control" id="date" name="date" >
      </div>
    </div>
    
    <!--ruolo-->
    <!--scarico i dati dal db per essere sempre aggiornato-->
    <div class="form-group row">
    <label for="ruolo" class="col-sm-2 col-form-label">Ruolo</label>
    <div class="col-sm-4 ">
    <select class="form-control" id="ruolo" name="role">
          <?php
            //includo la connessione in modo da non riscriverla più volte
            include '../connection/connection.php';

            $sql = "SELECT * from ruolo";
            $result = $connessione->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<option value = " .$row["id_ruolo"]."> "  .$row["descrizione"]. "</option>";
                }
            } else {
            }
            $connessione->close();
            ?>
    </select>
    </div>
  </div>

    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" id="calciatore" class="btn btn-primary " value="Send">Aggiungi</button>
      </div>
    </div>

  <!--response message - positive-->
  <div class="alert alert-success a" id="alert-success" style="visibility:hidden;">
    
    <strong>OK!</strong> Calciatore aggiutnto
</div>
  <!--response message - negative-->
<div class="alert alert-danger " id="alert-error" style="visibility:hidden;">
    
    <strong>Opss!</strong> Ci deve essere quaalche problema
  </div>
    
  </form>
</div>
<script>
  $(function() {
    $('form').submit(function() {
        $.ajax({
            type: 'POST',
            url: 'insert_calciatore.php',
            data: $(this).serialize(),
            success: function(data) {
                $('#alert-success').css({
                  visibility:'visible'
                });
            },
            error: function(data) {
              $('#alert-error').css({
                  visibility:'visible'
                });
          }
            
        });
      
        return false;
    }); 
})


</script>

</body>

</html>