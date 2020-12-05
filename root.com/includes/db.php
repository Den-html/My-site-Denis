<?php

$config = array(
	'title' => 'Блог',
	'db' => array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'name' => 'blog')
);

$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']
);

if ( $connection == false ) 
{
	echo 'Не удалось!<br>';
	echo mysqli_connect_error();
	exit();
}