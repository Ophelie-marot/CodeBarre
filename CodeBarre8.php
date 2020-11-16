<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .blanche {
            background-color: white;
            width: 2px;
            height: 50px;
            display: inline-block;
        }
        .noire {
            background-color: black;
            width: 2px;
            height: 50px;
            display: inline-block;
        }
    </style>
</head>
<body>


<?php


$code = "84165961";




 $arrayA = [
    0 => "0001101",    1 => "0011001",
    2 => "0010011",    3 => "0111101",
    4 => "0100011",    5 => "0110001",
    6 => "0101111",    7 => "0111011",
    8 => "0110111",    9 => "0001011",

  ];

  $arrayB = [
    0 => "0100111",    1 => "0110011",
    2 => "0011011",    3 => "0100001",
    4 => "0011101",    5 => "0111001",
    6 => "0000101",    7 => "0010001",
    8 => "0001001",    9 => "0010111",

  ];

  $arrayC = [
    0 => "1110010",    1 => "1100110",
    2 => "1101100",    3 => "1000010",
    4 => "1011100",    5 => "1001110",
    6 => "1010000",    7 => "1000100",
    8 => "1001000",    9 => "1110100",

  ];

  $normal = "101";
  $central = "01010";

  $decompose = str_split($code);

  $result = "";
  $result .= $normal;

  for ($i=0; $i < 4; $i++){
    $result .= $arrayA[$decompose[$i]];
  }

  $result .= $central;


  for ($i=4; $i < 8 ; $i++){
    $result .= $arrayC[$decompose[$i]];
  }

  $result .= $normal;


  //$result


  $decompose_result = str_split($result);

  foreach ($decompose_result as $keys => $values) {
    if ($values == 0) {
      echo "<div class='blanche'></div>";
    } 

    if ($values == 1) {
      echo "<div class='noire'></div>";
    } 
  }

  ?>

  
</body>
</html>