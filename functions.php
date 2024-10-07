<?php
function generaPassword($lunghezza, $consentiRipetizioni, $includeLettere, $includeNumeri, $includeSimboli)
{
  $caratteri = [];

  // Aggiungi lettere minuscole e maiuscole
  if ($includeLettere) {
    $caratteri = array_merge($caratteri, range('a', 'z'));
    $caratteri = array_merge($caratteri, range('A', 'Z'));
  }
  // Aggiungi numeri
  if ($includeNumeri) {
    $caratteri = array_merge($caratteri, range('0', '9'));
  }
  // Aggiungi simboli
  if ($includeSimboli) {
    $caratteri = array_merge($caratteri, str_split('!@#$%^&*()_+-=[]{}|;:,.<>?'));
  }

  // Controlla se ci sono caratteri validi
  if (empty($caratteri)) {
    return "Nessun parametro valido inserito.";
  }

  // Genera la password
  $passwordGenerata = '';
  $max = count($caratteri) - 1;

  for ($i = 0; $i < $lunghezza; $i++) {
    if ($consentiRipetizioni) {
      $passwordGenerata .= $caratteri[rand(0, $max)];
    } else {
      do {
        $carattere = $caratteri[rand(0, $max)];
      } while (strpos($passwordGenerata, $carattere) !== false);
      $passwordGenerata .= $carattere;
    }
  }

  return $passwordGenerata;
}
