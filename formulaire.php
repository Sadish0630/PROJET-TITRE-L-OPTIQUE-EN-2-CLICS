<?php
$allowedExtension = ['pdf'];
?>

<!DOCTYPE html>
 <html lang="fr" dir="ltr">

 <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="projetitre.css" />
     <title>L'optique en 2 clics</title>
 </head>

 <body>
     <!--FORMULAIRE DE CONTACT-->
     <?php
    $typemimeVerif = $_FILES['files']['type'];
    $extensionFiles = strtolower(pathinfo($_FILES['files']['name'])['extension']);
    if (((!empty($_POST['firstname'])) && (!empty($_POST['lastname'])) && (!empty($_FILES['files']) && (in_array($extensionFiles,$allowedExtension)) && $typemimeVerif == 'application/pdf'))) { ?>
        <p><?= $_POST['gender'] ?></p>
        <p><?= $_POST['firstname'] ?></p>
        <p><?= $_POST['lastname'] ?></p>
        <p><?= $_POST['mail'] ?></p>
        <p><?= $_POST['write'] ?></p>
        <p><?= $_FILES['files']['name'] ?></p>
    <?php } else { ?>
     <form action="index.php" method="POST" enctype="multipart/form-data">
         <fieldset class="green">
             <legend class="green">Comment puis-je vous aider?</legend>

             <label>Vous êtes : </label>
             <select name="gender">
                 <option value="Monsieur">Monsieur</option>
                 <option value="Madame">Madame</option>
             </select>
             <label for="lastname">Nom:</label>
             <input id="lastname" type="text" placeholder="DUPONT">
             <label for="firstname">Prénom:</label>
             <input id="firstname" type="text" placeholder="André">
             <label for="mail">Adresse mail:</label>
             <input id="mail" type="text" placeholder="mail@gmail.com" />
             <input type="file" name="files"/>
             <label for="write">Je vous écoute:</label>
             <textarea name="write" placeholder="Bonjour, Comment savoir si ma monture est bien ajustée? Merci"></textarea>
             <button type="button">Envoyer!</button>
         </fieldset>
         <?php
            if (isset($_POST['gender']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {
                echo 'Vous êtes, ' . $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' .  $_POST['lastname'] . ' et vous avez écrit' . $POST['write'];
            }
            ?>
     </form>
     <?php } ?>  
 </body>
 </html>