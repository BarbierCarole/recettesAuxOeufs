<?php session_start(); ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Soumettre un commentaire</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
 </head>
 <bodyclass="d-flex flex-column min-vh-100">
    <div class="container">
    <?php include_once('../includes/header.php'); ?>

    <form method="POST" action="post_comment.php" >
        <div class="mb-3">
            <input type="hidden" id="recipe_id" name="recipe_id" value="<?php echo $_GET['recipe_id'] ?>">
            <input type="hidden" id="user_email" name="user_email" value="<?php echo $_GET['user_email'] ?>">        
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Votre commentaire sur la recette </label>
            <input type="txt" class="form-control" id="comment" name="comment" placeholder="Commentaire" aria-describedby="title-help">
            <div id="title-help" class="form-text">Choisissez un commentaire constructif!</div>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    </div>
      <?php include_once('../includes/footer.php'); ?>
 </body>
 </html>