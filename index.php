<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">
    <div class="form-container">
      <h1 class="text-center">Strong Password Generator</h1>
      <h2 class="text-center mb-4">Genera una password sicura</h2>

      <form method="GET">
        <div class="mb-3">
          <label for="lunghezza" class="form-label">Lunghezza password:</label>
          <input type="number" id="lunghezza" name="lunghezza" class="form-control" min="1">
        </div>
        <div class="mb-3">
          <label class="form-label">Consenti ripetizioni di uno o più caratteri:</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" id="ripetizioni_si" name="ripetizioni" value="si" checked>
            <label class="form-check-label" for="ripetizioni_si">Sì</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" id="ripetizioni_no" name="ripetizioni" value="no">
            <label class="form-check-label" for="ripetizioni_no">No</label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Seleziona i tipi di caratteri da includere:</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="lettere" name="lettere">
            <label class="form-check-label" for="lettere">Lettere</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="numeri" name="numeri">
            <label class="form-check-label" for="numeri">Numeri</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="simboli" name="simboli">
            <label class="form-check-label" for="simboli">Simboli</label>
          </div>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Invia</button>
          <a href="index.php" class="btn btn-secondary">Reset</a>
        </div>
      </form>


      <?php
      include 'functions.php';
      // Utilizzo della funzione
      if (isset($_GET['lunghezza'])) {
        $lunghezzaPassword = (int)$_GET['lunghezza'];
        $consentiRipetizioni = isset($_GET['ripetizioni']) && $_GET['ripetizioni'] === 'si';
        $includeLettere = isset($_GET['lettere']);
        $includeNumeri = isset($_GET['numeri']);
        $includeSimboli = isset($_GET['simboli']);

        if ($lunghezzaPassword > 0) {
          $passwordGenerata = generaPassword($lunghezzaPassword, $consentiRipetizioni, $includeLettere, $includeNumeri, $includeSimboli);

          // Output della password generata
          echo '<div class="output-container mt-4">';
          echo '<strong>Password generata: </strong>';
          echo '<p>' . ($passwordGenerata) . '</p>';
          echo '</div>';
        } else {
          echo '<div class="output-container mt-4">';
          echo '<strong>Nessun parametro valido inserito.</strong>';
          echo '</div>';
        }
      }
      ?>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>