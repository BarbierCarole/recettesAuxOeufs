<?php session_start(); ?>
<!-- recipe_form.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Soumettre une recette</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php include_once('includes/header.php'); ?>
        <h1>Quelle recette proposer contenant des oeufs ?</h1>

        <?php if(isset($_SESSION['LOGGED_USER'])): ?>
            
            <form method="POST" action="submit_recipe.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="titleRecipe" class="form-label">Titre</label>
                    <input type="txt" class="form-control" id="titleRecipe" name="titleRecipe" placeholder="Titre de ma recette">
                </div>
                <div class="mb-3">
                    <label for="recipe" class="form-label">Les étapes de la recette</label>
                    <input type="txt" class="form-control" id="recipe" name="recipe" placeholder="Je développe ici toutes les étapes de ma recette">
                </div>
                <input type="hidden" class="form-control" id="author" name="author" value=<?php echo $_SESSION['LOGGED_USER'] ?>>
                <button type="submit" class="btn btn-primary">Je propose ma recette</button>
            </form>
        
        <?php else: ?>
        <div>Pour proposer une recette, vous devez être inscrit et connecté</div>
        <?php include_once('includes/login.php'); ?>
        <?php endif; ?>

        <br />
    </div>

    <?php include_once('includes/footer.php'); ?>
</body>
</html>
