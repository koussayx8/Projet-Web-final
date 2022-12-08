<?php
	include "../../../../controller/MarqueC.php";
	include_once '../../../../Model/Marque.php';
    $id_marque = $_GET['id'];
    $nom_marque=$_POST['nom_marque'];

    
        $Marque = new Marque($nom_marque) ;
        $MarqueC = new MarqueC();
        $MarqueC->modifierMarque($Marque,$id_marque);
        header('Location: listeMarque.php');
    ?>

