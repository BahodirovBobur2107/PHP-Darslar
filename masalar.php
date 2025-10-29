<?php
function yigindi($son = 100000){
	$summa = 0;
	for($i = 1; $i <= $son; $i++){
		$summa += $i;
	}
	echo "Hello world! $summa \n";
}

yigindi();

	?>