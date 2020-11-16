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

$code = "8002270015328";

$motif = [
    0 => "AAAAAA",     1 => "AABABB",
    2 => "AABBAB",     3 => "AABBBA",
    4 => "ABAABB",     5 => "ABBAAB",
    6 => "ABBBAA",     7 => "ABABAB",
    8 => "ABABBA",     9 => "ABBABA",
];   



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

  $type = $motif[substr($code, 0, 1)];

  $normal = "101";
  $central = "01010";

  $decompose = str_split($code);

  $decompose_type = str_split($type);

  $result = "";

  $result .= $normal;

  for ($i = 1; $i < 7; $i++) {
      if ($decompose_type[$i-1] == "A") {

          $result .= $arrayA[$decompose[$i]];

      } else if ($decompose_type[$i-1] == "B") {

          $result .= $arrayB[$decompose[$i]];

      }
  }

  $result .= $central;

  for ($i = 7; $i < 13 ; $i++){
    $result .= $arrayC[$decompose[$i]];
  }

  $result .= $normal;


  //$result


  $decompose_result = str_split($result);

  foreach ($decompose_result as $values) {
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