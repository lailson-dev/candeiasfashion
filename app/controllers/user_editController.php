<?php 

use app\models\User;

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$user = new User;
$userFind = $user->find('id', $id);

$layout->add('perfil');