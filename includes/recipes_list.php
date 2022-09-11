<?php foreach(get_recipes($recipes, $limit) as $recipe) : ?>
    
    <article>
        <h3><?php echo($recipe['title']); ?></h3>
        <div><?php echo($recipe['recipe']); ?></div>
        <i><?php echo(display_author($recipe['author'], $users)); ?></i>
        <div><?php ?></div>
        <ul class="list-group list-group-horizontal">
            <?php if(isset($loggedUser) && $recipe['author'] === $loggedUser['email']): ?>
            <li class="list-group-item"><a class="link-warning" href="./recipes/update.php?id=<?php echo($recipe['recipe_id']); ?>">Editer l'article</a></li>
            <li class="list-group-item"><a class="link-danger" href="./recipes/delete.php?id=<?php echo($recipe['recipe_id']); ?>">Supprimer l'article</a></li>   
            <?php endif; ?>
            <li class="list-group-item"><a class="link-danger" href="./comments/comment.php?recipe_id=<?php echo($recipe['recipe_id']); ?>&user_email=<?php echo $loggedUser['email']; ?>">Ajouter un commentaire</a></li>
        </ul>
        
        
        
        
    </article>
    
<?php endforeach ?>