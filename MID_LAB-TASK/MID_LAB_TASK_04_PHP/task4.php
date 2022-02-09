<?php
$n1 = 20;
$n2 = 15;
$n3 = 100;
function large($x, $y, $z) {
  $max = $x;

  if ($x >= $y && $x >= $z)
    $max = $x;
  elseif ($y >= $x && $y >= $z)
    $max = $y;
  else 
    $max = $z;

  echo "large number is $max \n";
}

large($n1, $n2, $n3);
?>