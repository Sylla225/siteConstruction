<?php 
    require("conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>syllatetch</title>
 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="c.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>
    <header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">SYLLA  TETCH </a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#header">Home</a></li>
                        <li><a href="gallery.php">GALLERY</a></li>
                        <li><a href="commande.php">COMMANDE</a></li>
                        <li><a href="controls.php">ADMINISTRATION</a></li> 
                        <li><a href="#contact">A PROPOS</a></li>                        
                    </ul>
                </div>
            </div>
        </nav>		
    </header>	
    <div id="my_carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#my_carousel" data-slide-to="1"></li>
            <li data-target="#my_carousel" data-slide-to="2"></li>
            <li data-target="#carousel-slider" data-slide-to="3"></li>
            <li data-target="#carousel-slider" data-slide-to="4"></li>
            <li data-target="#carousel-slider" data-slide-to="5"></li>
        </ol>
<div class="carousel-inner">
   
        <div class="item active">  
            <div class="carousel-page">
                <img src="image/v6.jpg" class="img-responsive" style="margin:0px auto;" />
            </div> 
            <div class="carousel-caption">RIEN QUE POUR VOTRE PLAISIR</div>
        </div>   
    <div class="item"> 
        <div class="carousel-page"><img src="image/v4.jpg" class="img-responsive img-rounded" 
        style="margin:0px auto;"  /></div> 
        <div class="carousel-caption"> VILLA AVEC 4 PIECES</div> 
    </div>  

    <div class="item">  
        <div class="carousel-page">
            <img src="image/v5.jpg" class="img-responsive img-rounded" 
                style="margin:auto;max-height:100%;"  />
        </div>  
        <div class="carousel-caption">DES MAISON AU PRIX INDISCUTABLE</div>
    </div>  
    <div class="item"> 
        <div class="carousel-page"><img src="image/villa1.jpg" class="img-responsive img-rounded" 
        style="margin:0px auto;"  /></div> 
        <div class="carousel-caption">VOTRE DANS LE LIEUX QUE VOUS DESIREZ</div> 
    </div> 
    <div class="item"> 
        <div class="carousel-page"><img src="image/villa2.jpg" class="img-responsive img-rounded" 
        style="margin:0px auto;"  /></div> 
        <div class="carousel-caption"> DES MAISONS DE MARQUE ET QUALITE</div> 
    </div>
    <div class="item"> 
        <div class="carousel-page"><img src="image/v3.jpg" class="img-responsive img-rounded" 
        style="margin:0px auto;"  /></div> 
        <div class="carousel-caption">MAISON en ville </div> 
    </div>
</div>

<a class="left carousel-control" href="#my_carousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#my_carousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>

<footer>
		<div id="contact">
			<div class="container">
				<div class="text-center">
					<h3>A PROPOS</h3>
					<p></p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
						<h2>TOUT SAVOIR SUR NOUS</h2>
						<p>Avec SYLLA TETCH vous avez la possibilitée de modifier <br>
						 vos maisons, la chambre , le salon , la cusine, la douche et meme vos piscine <br>
                         ect ... déja contruitent comme vous le desirer en plus de cela, <br>
                         remplisser le formulaire de demande et indiquer nos critères  </p>				
					</div>				
					
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
						<h2>Contact</h2>
						<ul>
							<li><i class="fa fa-home fa-2x"></i> Abidjan, angré non loin du nouveau CHU</li><hr>
							<li><i class="fa fa-phone fa-2x"></i> +255 45892584</li><hr>
							<li><i class="fa fa-envelope fa-2x"></i> syllatetch@hotmail.com</li>
						</ul>
					</div>
					<?php 
            //require("conf.php");
            $nom = $sujet = $email = $msg = "";
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nom = htmlspecialchars($_POST['nom']);
                $email = htmlspecialchars($_POST['email']);
                $sujet = htmlspecialchars($_POST['sujet']);
                $msg = htmlspecialchars($_POST['msg']);
                if(!empty($nom AND $email AND $sujet AND $msg)){
                $req = $db -> prepare('INSERT INTO suggestion (nom,email,sujet,msg)values(?,?,?,?)');
                $req-> execute(array($nom,$email,$sujet,$msg));
                //header('location: carousel.php');
                }
                else
                    $error="veillez renseigner tout les chmaps";
            }
	    ?>
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">					
						<form class="form-inline" method="POST" action="carousel.php">
							<div class="form-group">
								<input type="text" class="form-control" id="name" placeholder="Nom" name="nom" required="required">							
							</div><br>
							<div class="form-group">							
								<input type="email" class="form-control" id="Email" placeholder="email" name="email" required="required">
							</div> <br><br/>	
							<div class="form-group">
								<input type="subject" class="form-control" placeholder="Sujet" name="sujet" required="required">
							</div>	<br/><br>					
							<textarea class="form-control" rows="9" name="msg"></textarea>							
							<div class="form-group">
								<button type="submit"  class="btn btn-primary btn-lg" required="required">Envoyez Votre Message</button>
							</div>
						</form>
					</div>	
        
				</div>
			</div>
		</div>		
	</footer>
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
