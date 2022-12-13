<?php 
    $text = "Farfallina bella e bianca
    vola vola mai si stanca
    vola qua, vola là:
    mai nessun la fermerà!
    vola, vola ore ed ore
    poi si posa su un bel fiore
    vola qua, vola la:
    mai nessun la fermerà!";

    $word = $_GET["word"];
    
    $text2 = str_replace($word, "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1><?php echo $text ?></h1>
    <h2>lunghezza testo: <?php echo strlen($text)?></h2>
    <h1><?php echo $text2 ?></h1>
    <h2>lunghezza testo: <?php echo strlen($text2)?></h2>

</body>
</html>