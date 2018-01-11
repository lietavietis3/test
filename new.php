<?php

$a = 1;
$b = 4;

$win = "success";

$c = $a + $b;

if($c > 4){
	echo $win;
} elseif ($c == 4){
	echo "tie";
}  else {
		 echo "loss";
}


?>