<?php

$text = 'Текст документа';

$documents = range(1, 100);

shuffle($documents);

$dates = array(
	'14.12.2017', 
	'07.01.2018', 
	'23.02.2018', 
	'08.03.2018'
);

foreach ($documents as $key => $number) {
	$documents[$key] = array(
		'number' => $number,
		'text' => $text,
		'date' => $dates[array_rand($dates)],
	);
}

foreach ($documents as $document) {
	if ($document['date'] === '07.01.2018') {
		echo 'Я нашел №'.$document['number'].PHP_EOL;
	}
}