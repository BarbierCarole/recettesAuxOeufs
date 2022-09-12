
<!-- post_update.php -->
<?php session_start(); 

include_once('../config/mysql.php');
include_once('../variables.php');
include_once('../config/user.php');

if (!isset($_POST['title']) 
    || !isset($_POST['recipe'])
    || !isset($_POST['id'])
)
{
	echo('Il manque des info pour mettre à jour votre recette.');
    return;
}	

$id = $_POST['id'];
$title = $_POST['title'];
$recipe = $_POST['recipe'];

// Ecriture de la requête
$sqlQuery = 'UPDATE recipes SET title = :title, recipe = :recipe WHERE recipe_id = :id';

// Préparation
$insertRecipe = $mysqlClient->prepare($sqlQuery);

// Exécution ! La recette sera en base de données
$insertRecipe->execute([
    'title' => $title,
    'recipe' => $recipe,
    'id'=> $id,
]);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Site de recettes aux oeufs - Ma recette soumise</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
    </head>
    <body>
        <div class="container">
    
        <?php include_once('../includes/header.php'); ?>
            <h1>Recette bien reçue !</h1>
            
            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">Rappel de votre recette</h5>
                    <p class="card-text"><b>Titre</b> : <?php echo $title; ?></p>
                    <p class="card-text"><b>Email</b> : <?php echo $loggedUser['email']; ?></p>
                    <p class="card-text"><b>Etapes</b> : <?php echo strip_tags($recipe); ?></p>
                </div>
            </div>
        </div>
        <?php include_once('../includes/footer.php'); ?>   
    </body>
</html>