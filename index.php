<?php

// questo è un commento PHP

$name = 'Ugo';
$lastname = 'De Ughi';
$age = 30;

$messaggio = 'Ciao ' . $name . '!';
// è possibile inserire variabili in una stringa se la stringa ha apici doppi
$messaggio2 = "Ciao $name!";

echo '==== stampo messaggio con variabile ========== <br>';
echo $messaggio;
echo '<br>';
echo $messaggio2;

$fullname = $name . ' ' . $lastname;

$arr_expode = explode(' ', $fullname);

$text = 'Lorem ipsum dolor sit amet ciao consectetur adipisicing elit. Magnam, quod porro sint sequi ab et, ipsam consequuntur fugiat animi accusamus, provident repudiandae sapiente ciao tenetur dolor eveniet dolorum! Aut, explicabo exercitationem!';

$lunghezza_testo_originale = strlen($text);

$testo_corretto = str_replace('ciao', 'buongiorno', $text);
$lunghezza_testo_corretto = strlen($testo_corretto);


 var_dump($fullname);
 echo '==== explode di una stringa========== <br>';
 var_dump($arr_expode);

 $colori = ['giallo', 'rosso', 'verde', 'blu'];

 foreach($colori as $colore){
  echo $colore . '<br>';
 }

 var_dump($colori);
 $colori[] ='rosa';
 var_dump($colori);
 echo '==== colore RANDOM ========== <br>';
 $chiave_random = rand(0,count($colori) - 1);
 $colore_random = $colori[ $chiave_random];
 echo "Colore estratto: $colore_random con chiave  $chiave_random";

 var_dump($colori[1]);

 $user = [
  'name' => 'Ugo',
  'lastname' => 'De Ughi',
 ];
 // verifico se esiste la chiave 'age'
 echo '==== array_key_exists ==========';
 var_dump(array_key_exists('age',$user));
 
 var_dump($user);
 $user['age'] = 30;
 echo '===== array_key_exists =========';
 var_dump(array_key_exists('age',$user));

 echo '===== array_keys =========';
 var_dump(array_keys($user));

 var_dump($user);
 var_dump($user['lastname']);

 $team = [
     [
     'name' => 'Ugo',
     'lastname' => 'De Ughi',
     'age' => 30,
    // 'colori_preferiti' => ['giallo', 'verde'] 
    ],
    [
      'name' => 'Giuseppe',
      'lastname' => 'Verdi',
      'age' => 80,
    //  'colori_preferiti' => ['rosa', 'blu'] 
    ],
  ];


 echo '===== stampa di elementi di array di array =========';
  var_dump($team);
  var_dump($team[1]);
  var_dump($team[1]['lastname']); // verdi
  //var_dump($team[0]['colori_preferiti'][1]); // verde

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
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

<!-- ciclo i colori  -->
<h2>Colori</h2>
<ul>
  <?php foreach($colori as $colore): ?>
    <li><?php echo $colore ?></li>
    <?php endforeach; ?>
  </ul>

  <!-- ciclo di array di array  -->
<h2>Team con solo nome e cognome</h2>
<ul>
  <?php foreach($team as $persona): ?>
    <li><?php echo $persona['name'] . ' ' . $persona['lastname'] ?></li>
  <?php endforeach; ?>
</ul>
<h2>Team con tutte le chiavi</h2>
<ul>
  <?php foreach($team as $persona): ?>
    <li>
      <ul>
        <?php foreach($persona as $chiave => $valore){
          echo "<li>$chiave => $valore</li>";
        }?>
      </ul>
    </li>
  <?php endforeach; ?>
</ul>
  
</body>
</html>