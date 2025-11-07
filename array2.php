<?php
$users = [
	["ism" => "Alisher", "Familya" => "Yuldashev", "t-yil" => 1985],
	["ism" => "Bahrom", "Familya" => "Yuldashev", "t-yili" => 1988],
	["ism" => "Bobur", "Familya" => "Bahodirov", "t-yili" => 2011],
	["ism" => "Solayjon", "Familya" => "Bahodirov", "t-yili" => 2012],
];

// $son = [[3,5,4,[,5.9,75,]],5,5,7];
print_r($users);
echo $users[1]['ism'];
echo "\n";
foreach ($users as $item){
	echo $item['ism'].", ";
}
?>