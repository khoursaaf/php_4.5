<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
    <?php
    function varConcat($text, $number)
    {
      if (is_string($text) && is_int($number)) {
        echo $text." ".$number.".";
      } else {
        echo "C'est faux";
      }
    }
    $text = "Je suis Gold";
    $number = 90; ?>
    <p><?php echo varConcat($text, $number); ?></p>
  </body>
</html>
