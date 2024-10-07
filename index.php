<!DOCTYPE html>
<html lang="in">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
</head>

<body>
  <div class="container">
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
    <form method="GET">
      <div class="form-group">
        <label for="lunghezza">Lunghezza password:</label>
        <input type="number" id="lunghezza" name="lunghezza" min="1" required>
      </div>
      <div class="form-group">
        <label>Consenti ripetizioni di uno o più caratteri:</label>
        <input type="radio" id="ripetizioni_si" name="ripetizioni" value="si" checked>
        <label for="ripetizioni_si">Sì</label>
        <input type="radio" id="ripetizioni_no" name="ripetizioni" value="no">
        <label for="ripetizioni_no">No</label>
      </div>
      <div class="form-group">
        <label>Seleziona i tipi di caratteri da includere:</label>
        <input type="checkbox" id="lettere" name="lettere">
        <label for="lettere">Lettere</label>
        <input type="checkbox" id="numeri" name="numeri">
        <label for="numeri">Numeri</label>
        <input type="checkbox" id="simboli" name="simboli">
        <label for="simboli">Simboli</label>
      </div>
      <input type="submit" value="Invia">
      <input type="reset" value="Annulla">
    </form>
  </div>
</body>

</html>