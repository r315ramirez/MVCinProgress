<?php

    /** MODELES **/
    
    require_once("./modeles/ConnexionDB.class.php");
    require_once("./modeles/TroisD.class.php");
	require_once("./modeles/Acc.class.php");
	require_once("./modeles/Videos.class.php");
	require_once("./modeles/Jeux.class.php");
	    
	
    /** VUE **/
    
    require_once("./vues/Vue.class.php");

	/** CONTROLEURS **/
    require_once("./controleur/Controleur.class.php");
    
	
	
	/** Initialisation des variables **/
       
    require_once("./var.init.php");
   
    
	
    $oCTL = new Controler();
    $oCTL->gerer();


?>
