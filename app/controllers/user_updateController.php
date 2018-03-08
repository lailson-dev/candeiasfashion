<?php 

use app\classes\Validation;
use app\models\User;

$user = new User;
$validation = new Validation;

$validate = $validation->validate($_POST);
$updated = $user->update($_POST, ['id' => $validate->id]);

if(updated) {
	header('location: /perfil?id=1');
}

