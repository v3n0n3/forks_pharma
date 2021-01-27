<?php

	if(empty($_GET['page'])){
		require "views/test.php";
	} else {
		switch ($_GET['page']){
			case "accueil" : require "views/acceuil.view.php";
			break;
			case "livres" : $livreController->afficherLivres();
			break;
		}
	}

?>

