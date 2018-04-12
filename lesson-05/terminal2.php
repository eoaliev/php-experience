<?php

$names = [
	'male'=> ["Omar", "Magnus", "Moysha", "Abdul", "Ivan" ],
	'female' => ["Fringhilha", "Emma", "Sakura", "Helga", "Violetta"],
];
$last_name = [
	'male' => ["Hedira", "Bjorndallen", "Watson", "Nurmuhamedov", "Petrov"], 
	'female' => ['Domracheva', 'Vigo', 'Watson', 'Go', 'Uzumaki'],
];
$courses = [
	'math',
	'economy',
	'phylosophy',
	'astrology',
	'sociology', 
	'politology', 
	'physical culture', 
	'physics',
	'law',
	'anatomy',
];
$age = ["18", "20", "19"];
$gender = ["male", "female"];
$students = [];
	
for ($i=0; $i < 100 ; $i++) { 
	$genders = $gender[array_rand($gender)];

	$mycourses = [];
	while (count($mycourses) < 3) {
		$course = $courses[array_rand($courses)];
		if (!in_array($course, $mycourses)) {
			$mycourses[] = $course;
		}
	}
	
	$students[] = [
		'name' => $names[$genders][array_rand($names[$genders])],
		'last_name' => $last_name[$genders][array_rand($last_name[$genders])],
		'age' => $age[array_rand($age)],
		'gender'=> $genders,
		'courses' => $mycourses,
	];
}

// foreach ($students as $student) {
// 	if ($student["name"] === "Ivan"){
// 		echo "Его зовут ".$student["name"]." ".$student["last_name"].PHP_EOL;
// 	}
// }

var_dump($students);

// $student = [
// 	'name' => $names[array_rand($names)],
// 	"last_name" => $last_name[array_rand($last_name)],
// 	"age" => $age[array_rand($age)],
// ];

// var_dump($student);
