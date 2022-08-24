<?php session_start(); 
if (!isset($_POST['author'])) 
{
    echo('Vous devez être enregistré pour proposer une recette.');
    return;
}
// submit_recipe.php
if (!isset($_POST['titleRecipe']) || !isset($_POST['recipe']))
{
	echo('Il faut un titre et les étapes décrites pour soumettre votre recette.');
    return;
}	

$title = $_POST['titleRecipe'];
$recipe = $_POST['recipe'];

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
    
        <?php include_once('includes/header.php'); ?>
            <h1>Recette bien reçue !</h1>
            
            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">Rappel de votre recette</h5>
                    <p class="card-text"><b>Titre</b> : <?php echo($title); ?></p>
                    <p class="card-text"><b>Etapes</b> : <?php echo strip_tags($recipe); ?></p>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php'); ?>   
    </body>
</html>