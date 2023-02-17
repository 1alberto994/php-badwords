
<?php
$title='BADWORDS';
$text='Hai rotto il cazzo';

$censurato= str_replace('cazzo','***',$text)


?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>
</head>
<body>
    <h1> <?php echo $title ?> </h1>
    <p>
        il mio testo è:<?php echo $text ?>
    </p>
    <p>
        la lunghezza del mio  testo è di : <?php echo strlen($text)?> lettere
    </p>
    <p>
     parola censurata è:<?php echo $censurato?>
    </p>
    <p>
        la lunghezza della mia parola censurata è di: <?php echo strlen($censurato)?> lettere
    </p>
</body>
</html>