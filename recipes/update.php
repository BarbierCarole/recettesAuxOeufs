<?php session_start(); 

include_once('../config/mysql.php');
include_once('../variables.php');
include_once('../config/user.php');

if (!isset($_GET['id']) && is_numeric($_GET['id'])) 
{
    echo(' Il faut un identifiant de recette pour la modifier');
    return;
}

$retrieveRecipeStatement = $mysqlClient->prepare("SELECT * FROM recipes WHERE recipe_id=:id");
$retrieveRecipeStatement->execute([
    'id'=> $_GET['id'],
]);

$recipe = $retrieveRecipeStatement ->fetch((PDO::FETCH_ASSOC));
?>
<!-- update.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Modifier une recette</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php include_once('../includes/header.php'); ?>
        <h1>Corriger la recette : <?php echo($recipe["title"])?> ?</h1>

        <form action="<?php echo($rootUrl . 'recipes/post_update.php'); ?>" method="POST">
            <div class="mb-3 visually-hidden">
                <label for="id" class="form-label">Identifiant de la recette</label>
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo($_GET['id']); ?>">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Titre de la recette</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="title-help" value="<?php echo($recipe['title']); ?>">
                <div id="title-help" class="form-text">Choisissez un titre percutant !</div>
            </div>
            <div class="mb-3">
                <label for="recipe" class="form-label">Description de la recette</label>
                <textarea class="form-control" placeholder="Seulement du contenu vous appartenant ou libre de droits." id="recipe" name="recipe">
                <?php echo strip_tags($recipe['recipe']); ?>
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

    </div>

    <?php include_once('../includes/footer.php'); ?>
</body>
</html>
