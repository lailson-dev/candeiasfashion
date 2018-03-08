<?php 

$name = filter_input(INPUT_POST, 'input-name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'input-newEmail', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'input-password', FILTER_SANITIZE_STRING);
$gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);

$user = new app\models\User;
$cadastrado = $user->insert([
	'name' => $name,
	'email' => $email,
	'password' => $password,
	'gender' => $gender,
]);

if($cadastrado) {
	header('location: /');
}
