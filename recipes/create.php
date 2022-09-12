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

    <?php include_once('../includes/header.php'); ?>
        <h1>Quelle recette proposer contenant des oeufs ?</h1>

        <form method="POST" action="post_create.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Titre de la recette</label>
                <input type="txt" class="form-control" id="title" name="title" placeholder="Titre de ma recette" aria-describedby="title-help">
                <div id="title-help" class="form-text">Choisissez un titre percutant !</div>
            </div>
            <div class="mb-3">
                <label for="recipe" class="form-label">Les étapes de la recette</label>
                <input type="txt" class="form-control" id="recipe" name="recipe" placeholder="Seulement du contenu vous appartenant ou libre de droits.">
            </div>
            
            <button type="submit" class="btn btn-primary">Je propose ma recette</button>
        </form>
        
        <?php include_once('../includes/login.php'); ?>
        

        <br />
    </div>

    <?php include_once('../includes/footer.php'); ?>
</body>
</html>
