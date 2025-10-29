<?php
function hello(){
	echo "Hello world \n";
}

hello();
hello();
hello();
hello();
hello();


function qoshish($son = 11){
	$summa = 0;
	for($i = 1; $i <= $son; $i++){
		$summa += $i;
	}
	echo "Hello world! $summa \n";
}

qoshish();
qoshish();

function ikkisonniqoshish ($birinchi_son, $ikkinchi_son){
	echo $birinchi_son + $ikkinchi_son;
}

ikkisonniqoshish(52, 13);



echo "\n";
echo "\n";
function yoshnianiqlash($b_year, $year = 2024){
	echo "Siz ".$year - $b_year." yoshdasiz";
}

yoshnianiqlash(2011);
echo "\n";
echo "\n";
yoshnianiqlash(2011, 2025);
echo $yosh;
echo "\n";
if ($yosh < 18){

}
?>