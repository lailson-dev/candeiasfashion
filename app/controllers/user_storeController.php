<?php 

use app\classes\Validation;

$user = new app\models\User;
$validation = new Validation;

$validate = $validation->validate($_POST);

$cadastrado = $user->insert($validate);

if($cadastrado) {
	header('location: /');
}
