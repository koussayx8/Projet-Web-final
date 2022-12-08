<?php
include "../../../../controller/VoitureC.php";
$VoitureC = new VoitureC();
        $VoitureC->supprimerVoiture($_GET['id']);
        header('Location:listeVoiture.php');
