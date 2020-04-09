<?php
try {
    $base = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
    }
    catch(exception $e) {
      die('Erreur '.$e->getMessage());
    }
    ?>
