<?php
include "../../../../controller/MarqueC.php";
$MarqueC = new MarqueC();
        $MarqueC->supprimerMarque($_GET['id']);
        header('Location:listeMarque.php');
