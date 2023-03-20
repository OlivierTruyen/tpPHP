<?php


    include './vehicule.php';

    $moto = new Vehicule ('Honda CBR', 2 ,280);
    echo '<br>';
    echo $moto-> detect();
    echo '<br>';
    echo $moto->boost();
    echo '<br>';
    echo '<br>';
    echo $moto->getVitesse();
    echo '<br>';

    $voiture = new Vehicule ('Mercedes CLK' , 4 , 250);
    echo $voiture-> detect();
    echo '<br>';
    echo $voiture-> boost();
    echo '<br>';
    echo '<br>';
    echo $voiture->getVitesse();
    echo '<br>';

    echo "le vehicule le plus rapide est : " .$moto->plusRapide($voiture);








    // $maison = new Maison('Maison du bonheur', 50 , 100 ,2 );
    // var_dump($maison);
    // $maison->surfaceMaison();
    // var_dump($maison);

































?>