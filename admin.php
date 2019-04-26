<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <title>ADMINISTRATION</title>
</head>
<body>          
    <div class="container">
  <h1> LISTES DES DEMANDES</h1>           
  <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th  style="background-color:navajowhite">NOM</th>
                <th   style="background-color:khaki"  >PRENOM</th>
                <th   style="background-color:yellow">Email</th>
                <th  style="background-color:fuchsia"   >TELEPHONE</th>
                <th style="background-color:coral"  >LOCATION</th>
                <th style="background-color:palevioletred" >MESSAGE</th>
                <th style="background-color:darkgrey"> ACTION </th>
               
            </tr>
        </thead>
    <tbody>
            <?php 
                try{
                    $db=new PDO ('mysql:host=localhost;dbname=utilisateur','root','');
                }
                catch(PDOExecption $e){
                    die('Erreur'. $e->getMessage());
                }
                $req = $db -> query('SELECT nom,prenom,email,phone,location,message FROM commande');
             while ($reponse =$req->fetch())
             {?>
                <tr>
                    <td> <?php echo  htmlspecialchars($reponse["nom"]); ?></td>
                    <td> <?php echo htmlspecialchars($reponse["prenom"]); ?></td>
                    <td> <?php echo htmlspecialchars($reponse["email"]); ?></td>
                    <td> <?php echo htmlspecialchars($reponse["phone"]); ?></td>
                    <td> <?php echo htmlspecialchars($reponse["location"]); ?></td>
                    <td> <?php echo htmlspecialchars($reponse["message"]); ?></td>
                     <td> <a class="btn btn-danger" href="#" > Archiver</a></td>
                </tr>
            <?php 
                }
        $req -> closeCursor();
?>
       
    </tbody>
  </table>
</div>
    <script src="js/jquery-2.1.1.min.js"></script>		
    <script src="js/bootstrap.min.js"></script>	
</body>
</html>
             