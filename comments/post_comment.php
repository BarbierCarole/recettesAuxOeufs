<?php session_start();

include_once('../config/mysql.php');
include_once('../config/user.php');
include_once('../variables.php');

if (!isset($_POST['user_email']) && !isset($_POST['recipe_id']) && !isset($_POST['comment']))
{
	echo 'Il faut un identifiant valide pour ajouter un commentaire.';
    return;
}	

$user_email = $_POST['user_email'];
$recipe_id = $_POST['recipe_id'];
$comment = $_POST['comment'];

$createComment = $mysqlClient -> prepare('INSERT INTO `comments` (user_id,recipe_id, comment) VALUES ((SELECT user_id FROM users WHERE email like $user_email  ),:recipe_id, :comment) ');

$createComment->execute([
    'recipe_id' => $recipe_id, 
    'comment' => $comment,
]);