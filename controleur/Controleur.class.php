<?php

// define ("URL_BASE", "http://raulramirezportfolio.000webhostapp.com/index.php");

class Controler {

   public function gerer() {
      // Faire la sélection de la méthode à appeler pour traiter la requête correctement
      switch ( strtolower($_GET['page'])) {
		
		case 'home' :
		  $this -> Accueil();
	      break;
		
		// SUIVI
		// 1. Si l'usager clique sur videos dans le site web
		// le controleur appele la fonction ListeVideos ci-dessous (ligne 47) 
		case 'videos' :
		  $this -> ListeVideos();
	      break;  
						
		case 'jeux' :
		  $this -> ListeJeux();
		  break;
		  
		case 'photos3D' :
		  $this -> ListePhotos3D();
		  break;		   
							
	    default:
		  $this->ListePhotos3D();
		  break;
			
		}
    }
	
	
    private static function Accueil() {
		
		$oListe = new Acc();
		$arrayPhotosAcc = $oListe -> getPhotosAcc();
	
        $oVue = new Vue ();
		$oVue -> AfficheEntete();
		$oVue -> AfficheAccueil($arrayPhotosAcc);
		$oVue -> AffichePied();
	}
	
	// 2. la fonction ListeVideos fait une instance de la classe Videos
	// Cette instance est stocké dans la variable $oListe (comme un objet)
	private static function ListeVideos() {
		
		$oListe = new Videos();
		// 3. On declare une variable $arrayVideos pour stocker l'objet liste (qui se trouve dans la variable $oListe)
		// $oListe recoit le résultat de la fonction getVideos (qui fait un query vers la BD). Maintenant arrayVideos c'est la liste des vidéos.
		$arrayVideos = $oListe -> getVideos();

		// 4. Pour afficher, on fait une instance de la classe Vue...
        $oVue = new Vue ();
		$oVue -> AfficheEntete();
		
		// 5. La variable $arrayVideos, qui contient le résultat du query (la liste des vidéos trouvées dans la BD)
		// est passé à la fonction AfficheVideos qui se trouve dans la classe Vue et sert à afficher les résultats dans la page Web
		$oVue -> AfficheVideos($arrayVideos);
		$oVue -> AffichePied();
	}
	
	private static function ListeJeux() {
		
		$oListe = new Jeux();
		$arrayJeux = $oListe -> getJeux();
	
        $oVue = new Vue ();
		$oVue -> AfficheEntete();
		$oVue -> AfficheJeux($arrayJeux);
		$oVue -> AffichePied();
	}
	
    private static function ListePhotos3D() {
		
		$objetListe = new TroisD();
		$arrayPhotos = $objetListe -> getListePhotos3D();
	
		$oVue = new Vue ();
		$oVue -> afficheEntete();
		$oVue -> afficheListePhotos3D($arrayPhotos);
		$oVue -> affichePied();
	}


}


?>
