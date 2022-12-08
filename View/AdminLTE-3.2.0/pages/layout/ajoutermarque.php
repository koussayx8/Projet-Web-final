<?php
require '../../../../Model/Marque.php';
require '../../../../Controller/MarqueC.php';


    if ( isset($_POST['nom_marque']) ) {
    $nom_marque=$_POST['nom_marque'];

    $Marque = new Marque($nom_marque);
    $MarqueC = new MarqueC();
    $MarqueC->ajouterMarque($Marque);
    header('Location: Addm.php');        
            
    } 
        else {
            header('Location: Addm.php?erreur=1');
        }
