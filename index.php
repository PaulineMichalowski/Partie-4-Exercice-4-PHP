<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 4</title>
</head>
<body>
  <?php
  $first_number = 12;
  $second_number = 42;
  function numberComparate($number1, $number2) {
    if($number1 > $number2) {
      echo 'Le premier nombre est plus grand !';
    } elseif ($number1 < $number2) {
      echo 'Le premier nombre est plus petit !';
    } else {
      echo 'Les deux nombres sont identiques !';
    }
  }
  numberComparate($first_number, $second_number);
  ?>
</body>
</html>
