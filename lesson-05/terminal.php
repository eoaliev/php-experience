<?php

$names = ["Omar", "Magnus", "Moysha", "Abdul", "Ivan" ];
$last_name = ["Hedira", "Bjorndallen", "Watson", "Nurmuhamedov", "Petrov" ];
$age = ["18", "20", "19"];
$students = [];
	
for ($i=0; $i < 100 ; $i++) { 
	//$students[] = 1;
	$students[] = [
		'name' => $names[array_rand($names)],
		'last_name' => $last_name[array_rand($last_name)],
		'age' => $age[array_rand($age)],
	];
}

foreach ($students as $student) {
	if ($student["name"] === "Ivan"){
		echo "Его зовут ".$student["name"]." ".$student["last_name"].PHP_EOL;
}
}

//var_dump($students);

// $student = [
// 	'name' => $names[array_rand($names)],
// 	"last_name" => $last_name[array_rand($last_name)],
// 	"age" => $age[array_rand($age)],
// ];

// var_dump($student);
