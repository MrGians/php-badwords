<!-- 
TRACCIA:
- Creiamo una variabile con un paragrafo di testo a scelta.
- Stampiamo a schermo il paragrafo e la sua lunghezza.
- Passiamo sulla barra del browser in query string una parola che vogliamo censurare
- Recuperiamo la parola da censurare via PHP e  sostituiamo tutte le sue occorrenze nel paragrafo con 3 asterischi.
- Stampiamo di nuovo il paragrafo e la sua nuova lunghezza. 
-->

<?php 

// # PERCORSO + QUERY: http://localhost/php-badwords/?badword=Gianluca

// Paragrafo
$paragraph = "Questo è il paragrafo contenente la badwords: Gianluca";
// Lunghezza Paragrafo
$paragraph_length = strlen($paragraph);
// Badword recuperata tramite query in GET
$badword = $_GET["badword"];
// Replace della "badword" selezionata nel Nuovo Paragrafo
$new_paragraph = str_replace($badword, "***", $paragraph);
// Nuova Lunghezza Paragrafo
$new_paragraph_length = strlen($new_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <ul>
    <li><strong>Paragrafo:</strong></li>
    <li><?= $paragraph ?></li>
    <li><strong>Lunghezza:</strong></li>
    <li><?= $paragraph_length ?></li>
    <li><strong>Nuovo Paragrafo:</strong></li>
    <li><?= $new_paragraph ?></li>
    <li><strong>Nuova Lunghezza:</strong></li>
    <li><?= $new_paragraph_length ?></li>
  </ul>
</body>
</html>