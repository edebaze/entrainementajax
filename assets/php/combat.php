<?php
    session_start();

    require './class/Pokemon.php';
    
    $pikachu =  new Pokemon('pikachu', 12);

    //$_SESSION['tortank']->vie -= $_SESSION['pikachu']->att;

    /*
    echo ($_POST['nom'] . ' utilise ' . $_POST['attaque'] . ' sur ' . $_POST['cible']);
    echo('<br> tortank : ' . $_SESSION['tortank']->vie);
    */

    echo $_SESSION['tortank']->vie;


    /* PROBLEMES : - Si je vire "require './class/Pokemon.php';" et que je c/c la class Pokemon, je peux 
            manipuler $_SESSION['tortank'] avec toutes ses propriétés
                   - Si je définit "$pikachu =  new Pokemon('pikachu', 12);" je peux le manipuler.
                   - Si je c/c la class Pokemon() en ajoutant un require de ./class/Pokemon.php il me dit
            que la classe éxiste déjà

                                        --- --- --- --- --- ---

            La class est donc normalement bien chargée, le problème doit se situer au niveau du $_SESSION.
            Je dois trouver un moyen de corriger ça

            Néanmoins, pour l'instant les requètes fonctionnent. Il est possible de passer outre ce système
            de classes en utilisant la BDD en asynchrone
    */
?>