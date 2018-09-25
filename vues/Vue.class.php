<?php

class Vue{

	public function afficheEntete() {
	
	?>
	
	<!DOCTYPE html>
	<html lang="fr">
	<head>
		<title>Ramirez_Portfolio</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		
		<!-- feuille de style -->
        <link href="..//assets/css/style.css" rel="stylesheet">
		
		<!-- Bootstrap --> 
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		
		<!-- Javascript -->
		<link href="..//assets/js/main.js">
		
		<!-- Fonts -->
	    <link href="https://fonts.googleapis.com/css?family=Jura:700" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>

	<body>
    	
    	<main>
    		
    	<!-- ===== La navigation commence ici ===== -->	
    	    	
    	<nav class="navbar navbar-default navbar-static-top" role="banner">    	
    	    <div class="container">
		        <div class="navbar-header">
		
		          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only"></span>
		            <span class="icon-bar"></span>
		          </button>
		
		          <a class="navbar-brand home" href="./home.html">
		              <img src="../assets/img/PorfolioRamirezColibriLogo.png" class="img-responsive">
		          </a>
		        </div>
		      
		        <nav class="collapse navbar-collapse" role="navigation">
		          <ul class="nav navbar-nav">
		            <!-- Page active -->
		            <li><a href="index.php?page=home">ACCUEIL</a>
    			    <li><a href="index.php?page=videos">VIDÉOS</a></li>
    			    <li><a href="index.php?page=jeux">JEUX</a></li>    			
    			    <li><a href="index.php?page=photos3D">MODÈLES3D</a></li>
		          </ul>
		        </nav>
  			</div> <!-- div class container finit ici -->
    	
    	</nav> <!-- la navigation finit ici -->
    		
		<?php
	}
	
	public function afficheAccueil($aListePhotosAcc){
	?>
		<!-- ===== Carousel ===== -->
		<div id="myCarousel" class="carousel slide">
			
			
			<div class="carousel-inner">
		<?php
				
		if(!empty($aListePhotosAcc))
		{
			foreach ($aListePhotosAcc as $cle => $aListeAcc) {
				if($aListeAcc != ""){		
				
	  			echo "<div class ='card'>";								
			    echo "<img class='card-img-top' src='". $aListeAcc['lienPhotoAcc']."'>";
					echo "<div class ='card-block'>";
						echo "<p class='card-text'>'".$aListeAcc["nomPhotoAcc"]."'";
				}
					echo "</div>";
				echo "</div>";
			}    
		}
        
        ?>     
        	</div> <!-- carousel inner --> 
        </div> <!-- carousel -->   
                    
        <?php
         
    }
	
	// Le parametre vient du controleur (dans Private Static Function ListeVideos il s'appelait $arrayVideos)
	// $arrayVideos est remplacé (renommé) ici par $aListeVideos
	public function AfficheJeux($aListeJeux){
	?>
	
	<!-- Le modal commence ici -->
	<!-- Comment passer le contenu generé dynamiquement au modal? C-a-d l'id -->
	
	<div class="modal fade" id="videoModal" role="dialog">
			   
	    <div class="modal-dialog">
	        <div class="modal-content">
	        	           
	            <div class="modal-body">
	                <button type="button" class="close" data-dismiss="modal">&times;</button> <!-- Button pour fermer -->	                                
	                <div>
	                
	                <!--
	                <?php         
	                	echo "<iframe width='100%' height='350' src='".$aListeJ['lienVideoJeu']."'>";
	                ?>
	                -->	
	                	<iframe width="100%" height="350" src=""></iframe>
	                	                
	            	</div>
	        	</div>
	        
		        	<!-- le footer du modal -->
	  
			        <div class="modal-footer">
			            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
			        </div>
	        
	        
	    	</div>
		</div>
	</div> 

	<!-- modal -->
  
	<!-- ===== Album ===== -->
	
		<div class="album text-muted">
			<div class='container'>
				<div class="row">
		<?php
				
		if(!empty($aListeJeux))
		{
			foreach ($aListeJeux as $cle => $aListeJ) {
				if($aListeJ != ""){		
				
	  			echo "<div class ='card'>";								
			    	echo "<figure>";
				    	
						// echo "<a href='".$aListeJ["lienVideoJeu"]."' class='btn btn-default' data-toggle='modal' data-target='#videoModal' data-theVideo='".$aListeJ["lienVideoJeu"]."'>"."<img src='". $aListeJ['lienPhotoJeu']."' alt='Card image cap' class='img-responsive'>";
						
						echo "<a href='".$aListeJ["lienVideoJeu"]."' class='btn btn-default BtnOuvrir' data-toggle='modal' data-target='#videoModal' 
						data-theVideo='".$aListeJ["lienVideoJeu"]."'>" . "<img src='". $aListeJ['lienPhotoJeu']."' alt='Card image cap' class='img-responsive'>";
											
							echo "<div class ='card-block'>";
				}
							echo "</div>";
					echo "</figure>";
				echo "</div>";
			}    
		}
        
        ?>     
       			</div>  <!-- row -->
       		</div>  <!-- container --> 
        </div> <!-- album -->   
                    
        <?php
         
    }
    
	
	public function afficheVideos($aListeVideos){
	?>
		<div class="container">
			<div class='card-deck'>
		<?php
				
		if(!empty($aListeVideos))
		{
			foreach ($aListeVideos as $cle => $aListeVid) {
				if($aListeVid != ""){		
				
	  			echo "<div class ='resp-container'>";								
			    				
					echo "<iframe class='resp-iframe' width='480' height='320' src='".$aListeVid['lien']."'>";
				
							echo "<p class='card-block'>'".$aListeVid["nom"]."'";
				}
					 		echo "</p>";			
						echo "</div>";
					echo "</iframe>";
				echo "</div>";
			}    
		}
        
        ?>     
        	</div>  <!-- card-deck --> 
        </div> <!-- container -->    
                    
        <?php
         
    }
	
	
	public function AfficheListePhotos3D($aListePhotos3D){    
       ?>
				
		<div class="container">
			<div class='card-deck'>
		
		<?php
	
			
		if(!empty($aListePhotos3D))
		{
			
			foreach ($aListePhotos3D as $cle => $aListe3d) {
				if($aListe3d != ""){		
				
	  			echo "<div class ='card'>";								
			    echo "<img class='card-img-top' src='". $aListe3d['lienPhoto3D']."'>";
					echo "<div class ='card-block'>";
				            // echo "<a href='index.php?page=photos3D"."'></a>";
							echo "<p class='card-text'>'".$aListe3d["nomPhoto3D"]."'";
				}
					echo "</div>";
				echo "</div>";
	
			}    

		}
        
        ?>
        
                </div>
            </div>    
                    
        <?php    
            
    }
				
	public function affichePied()
	{
		?>
		</main>
		
		<div class="footer col-md-12" align="middle">
		    <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
		    <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
		    <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
		    <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
		</div> <!-- footer -->
				
	</body>
</html>
	<?php
		
	}
	
}

?>