<?php
session_start(); // Avvia la sessione
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">
    <h1 class="text-center">Password Generata</h1>

    <div class="output-container mt-4">
      <strong>Password: </strong>
      <p>
        <?php echo isset($_SESSION['password']) ? ($_SESSION['password']) : 'Nessuna password generata.'; ?>
      </p>
    </div>

    <!-- Pulisci la password dalla sessione se non è più necessaria -->
    <?php unset($_SESSION['password']); ?>

    <div class="text-center mt-4">
      <a href="index.php" class="btn btn-primary">Genera un'altra password</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>