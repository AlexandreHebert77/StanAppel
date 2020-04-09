


  <?php

      $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');

      $stmt = $pdo -> prepare("UPDATE `appel` SET Etat='ABS' WHERE Etat != 'NOT'");

      $stmt->execute();

      echo 'L\'étude commence';
  ?>
