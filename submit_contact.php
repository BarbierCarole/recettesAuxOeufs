<?php

// Pour l'insertion d'une image
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
{
    if ($_FILES['screenshot']['size'] <= 1000000)
    {
        $fileInfo = pathinfo($_FILES['screenshot']['name']);
        $extension = $fileInfo['extension'];
        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
        if (in_array($extension, $allowedExtensions))
        {
            move_uploaded_file($_FILES['screenshot']['tmp_name'], 'Uploads/' . basename($_FILES['screenshot']['name']));
            echo "L'envoi a bien été effectué ! ";
        }else 
        {
            echo "Votre fichier doit être une image au format jpg, jpeg, gif ou png.";
        }
    }else 
        {
            echo "Votre fichier doit avoir un poids inférieur à 1 Mo.";
        } 
}

// submit_contact.php
if (!isset($_POST['email']) || !isset($_POST['message']))
{
	echo('Il faut un email et un message pour soumettre le formulaire.');
    return;
}	

$email = $_POST['email'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Site de Recettes - Demande de contact reçue</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
    </head>
    <body>
        <div class="container">
    
        <?php include_once('includes/header.php'); ?>
            <h1>Message bien reçu !</h1>
            
            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">Rappel de vos informations</h5>
                    <p class="card-text"><b>Email</b> : <?php echo($email); ?></p>
                    <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); ?></p>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php'); ?>   
    </body>
</html>