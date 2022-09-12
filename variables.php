<?php

// Récupération des variables à l'aide du client MySQL
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement->execute();
$users = $usersStatement->fetchAll();

$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE is_enabled is TRUE');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

// pour afficher les commentaires de chaque recette
$commentStatement = $mysqlClient->prepare('SELECT r.recipe_id, comment FROM recipes r
    INNER JOIN  comments c ON r.recipe_id = c.recipe_id 
    INNER JOIN users u ON c.user_id = u.user_id 
    AND r.recipe_id = 1');
$commentStatement ->execute();
$comments = $commentStatement->fetchAll();


if(isset($_GET['limit']) && is_numeric($_GET['limit'])) {
    $limit = (int) $_GET['limit'];
} else {
    $limit = 100;
}

// Si le cookie est présent
if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER'],
    ];
}


$rootPath = $_SERVER['DOCUMENT_ROOT']. '/recettesAuxOeufs/';
$rootUrl = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/recettesAuxOeufs/';

