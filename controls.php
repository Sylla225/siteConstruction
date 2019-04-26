<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrateur</title>
    <link rel="stylesheet" href="controls.css">
</head>
<body>
     <div id="container">
    <?php
        require('conf.php');
        $motdepass = "";
    extract($_POST);
    if(isset($_POST["motdepass"]) AND ($_POST["motdepass"] =="#1Syllatetch"))
    {
        header('location: admin.php');
    }
     if(!isset($_POST["motdepass"]) OR ($_POST["motdepass"] !="#1Syllatetch"))
    {
                //header('location: controls.php');
    } 
    ?>
   
             <form action="controls.php" method="POST">
                <h1>Connexion</h1>
                
                <label for="email" ><b>Email administrateur : </b></label>
                <input type="text"  id="email"  placeholder="Entrer l'Email de l'administrateur" name="email" required>

                <label  for="mdp"><b>Votre mots de pass administrateur : </b></label>
                <input type="password"  id="mdp" placeholder="Entrer le mot de passe" name="motdepass" required>

                <input type="submit" id='submit' value='LOGIN' >
            </form>
        </div>
</body>
</html>
