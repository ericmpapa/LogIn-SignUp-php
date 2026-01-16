<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="bootstrap.min.css" />
         <script src="bootstrap.bundle.min.js"></script>
    </head>
    <body>
<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("users", $_POST['username'], $_POST['password'])) {
            echo '<div class="alert alert-success" role="alert"> Connexion réussie </div>';
        } else{
            $target_url = "index.php?msg=" . urlencode("Erreur: les paramètres d'accès sont incorrects");

            // Perform the redirect
            header("Location: " . $target_url, true, 302); // 302 is a temporary redirect
            exit; 
        }
    } else {
        echo "not ok";
        $target_url = "index.php?msg=" . urlencode("Erreur: connexion à la base de donnée");

        // Perform the redirect
        header("Location: " . $target_url, true, 302); // 302 is a temporary redirect
        exit;
    }
} else {
        $target_url = "index.php?msg=" . urlencode("Erreur: Tous les champs doivent être remplis");

        // Perform the redirect
        header("Location: " . $target_url, true, 302); // 302 is a temporary redirect
        exit;
    }
?>

   </body>
</html>

