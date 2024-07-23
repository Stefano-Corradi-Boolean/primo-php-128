<?php

// questo è un commento PHP

$name = 'Ugo';
$lastname = 'De Ughi';
$age = 30;

$fullname = $name . ' ' . $lastname;

$arr_expode = explode(' ', $fullname);

$text = 'Lorem ipsum dolor sit amet ciao consectetur adipisicing elit. Magnam, quod porro sint sequi ab et, ipsam consequuntur fugiat animi accusamus, provident repudiandae sapiente ciao tenetur dolor eveniet dolorum! Aut, explicabo exercitationem!';

$lunghezza_testo_originale = strlen($text);

$testo_corretto = str_replace('ciao', 'buongiorno', $text);
$lunghezza_testo_corretto = strlen($testo_corretto);


 var_dump($fullname);
 var_dump($arr_expode);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primo PHP</title>
</head>
<body>

<h1>Primo PHP</h1>

<h2>Ciao <?php echo $fullname ?> </h2>
<h4><?php echo $fullname ?> ha <?php echo $age ?> anni  </h4>

<p><?php echo $text ?></p>
<strong>Questo testo ha <?php echo $lunghezza_testo_originale ?> caratteri</strong>

<p><?php echo $testo_corretto ?></p>
<strong>Questo testo ha <?php echo $lunghezza_testo_corretto ?> caratteri</strong>
  
</body>
</html>