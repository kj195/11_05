<?php

$a = 1;
for($a=1;$a<101;$a++){
	if($a%15==0) echo " FizzBuzz";
	else if($a%3==0) echo " Fizz";
	else if($a%5==0) echo " Buzz";
	else echo"$a";
	echo "<br />";
}

?>