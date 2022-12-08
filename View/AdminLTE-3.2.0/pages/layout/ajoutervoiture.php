<?php
require '../../../../Model/Voiture.php';
require '../../../../Controller/VoitureC.php';


    if ( isset($_POST['nom_voiture']) && isset($_POST['prix']) && isset($_POST['image']) && isset($_POST['description']) && isset($_POST['id_vmarque']) ) {
    $nom_voiture=$_POST['nom_voiture'];
    $prix=$_POST['prix'];
    $image=$_POST['image'];
    $description=$_POST['description'];
    $id_vmarque=$_POST['id_vmarque'];
    move_uploaded_file($image,"C:/xampp/htdocs/Projet Web/View/Car-Dealer-Bootstrap/images/.$image");
    
    $Voiture = new Voiture($nom_voiture,$prix,$image,$description,$id_vmarque);
    $VoitureC = new VoitureC();
    $VoitureC->ajouterVoiture($Voiture);
    header('Location: Addv.php');        
            
    } 
        else {
            header('Location: Addv.php?erreur=1');
        }
