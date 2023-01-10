<?php

function countDigit($n)
{
	if ($n == 0)
		return 0;
	return (1 + countDigit($n / 10));
}

function check(int $number): bool 
{
	// count the number of digits
	$array   = str_split($number);
  $nlenght = count($array);
  $sum = 0;

  foreach($array as $n){
    $sum += pow((int)$n, $nlenght);
  }	
	
  return $number;
}

echo check($n);
 if (check($n) === $n) {
	echo "true";
 } else {
	echo "false";
}
?>
