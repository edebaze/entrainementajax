<?php
    include_once './assets/php/class/Pokemon.php';
    session_start();
    $_SESSION['pikachu'] = new Pokemon('pikachu', 12);
    $_SESSION['tortank'] = new Pokemon('tortank', 100);

    header('Location: ./main.php');
?>