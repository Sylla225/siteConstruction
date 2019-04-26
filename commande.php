
<!doctype html>
<html lang="fr">
    <meta charset="UTF-8">
	<title>Page Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="commande.css" >
</head>
<body>
		<section id="contact">
			<div class="overlay">
				<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>TYPE DE SERVICES-</span>DEMANDER</h1>
					<div class="row">
						<div class="contact-form">
							<form role="form" method="POST" action="commande.php">
								<div class="col-sm-6 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
										<div class="controls">
											<input class="contact_input" type="text" name="nom" placeholder="Nom">
											<i class="fa fa-user"></i>
										</div>
										<div class="controls">
											<input class="contact_input" type="text" name="prenom" placeholder="Prénom">
											<i class="fa fa-user"></i>
										</div>
										<div class="controls">
											<input class="contact_input" type="text" name="email" placeholder="Email">
											<i class="fa fa-envelope-o"></i>
										</div>
										<div class="controls">
											<input class="contact_input" type="text" name="phone" placeholder="Téléphone">
											<i class="fa fa-phone"></i>
										</div>
										<div class="controls">
											<input class="contact_input" type="text" name="location" placeholder="Locatite">
											<i class="fa fa-map-marker"></i>
										</div>
								</div>
								<div class="col-sm-6 col-md-6 wow fadeInRight" data-wow-delay="0.2s">
										<textarea name="message" rows="16" class="form-control" cols="100" placeholder="Veillez renseigner les modification que vous voulez aporter"></textarea>
										<i class="fa fa-envelope"></i>
								</div>
								<div class="col-sm-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
									<button type="submit" id="submit" class="btn btn-common">Envoyer</button>
								</div>
							</form>
						</div>
					</div>
				</div>	
			</div>
		</section>
		<?php
		$nom = $prenom = $email = $phone = $location = $message = $error =""; 
		try{
    $db= new PDO ('mysql:host=localhost;dbname=utilisateur','root','');
    $db->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }   
	catch(PDOException $e)
    {
        die('Erreur:'. $e->getMessage());
    }
		
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$location = htmlspecialchars($_POST['location']);
		$message = htmlspecialchars($_POST['message']);
    	if(!empty($nom AND $prenom AND $email AND $phone AND $location AND $message)){
        $req = $db -> prepare('INSERT INTO commande (nom,prenom,email,phone,location,message)values(?,?,?,?,?,?)');
        $req-> execute(array($nom,$prenom,$email,$phone,$location,$message));
        header('location: commande.php');
        }
		else
			$error="veillez renseigner tout les chmaps";
	}
	?>
		<footer id="footer">
			<div class="container">
					<div class="copyright text-center">
						<p>Designed and Developed by Sylla</p>
					</div>
			</div>
		</footer>
	<script src="js/jquery-2.1.1.min.js"></script>		
    <script src="js/bootstrap.min.js"></script>	
</body>	
</html>	