<?php
	include "../../../../controller/VoitureC.php";
	include_once '../../../../Model/Voiture.php';
    if ( isset($_POST['nom_voiture']) && isset($_POST['prix']) && isset($_POST['image']) && isset($_POST['description']) && isset($_POST['id_vmarque']) ) {

    $id_voiture = $_GET['id'];
    $nom_voiture=$_POST['nom_voiture'];
    $prix=$_POST['prix'];
    $image=$_POST['image'];
    $description=$_POST['description'];
    $id_vmarque=$_POST['id_vmarque'];

    
        $Voiture = new Voiture($nom_voiture,$prix,$image,$description,$id_vmarque) ;
        $VoitureC = new VoitureC();
        echo "nassim";
        $VoitureC->modifierVoiture($Voiture,$id_voiture);
        header('Location: listeVoiture.php');
    } 
    else {
        header('Location: listeVoiture.php?erreur=1');
    }

    ?>

