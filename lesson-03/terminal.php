<?php

$employee = array(
	'name' => 'Алона',
	'last_name' => 'Какая-то',
);

extract($employee);

var_dump(compact('name', 'last_name'));
