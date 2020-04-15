<!DOCTYPE html>
<html>
<head>
<title>Appel</title>

<link rel="stylesheet" href="../../style/index.css">
<head>

<body>

<?php

    $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');

    $reponse = $pdo->query("SELECT * FROM `appel` WHERE Etat!='NOT' ORDER BY Nom");
    while ($donnees = $reponse->fetch())
    {
  ?>
      <p>
        <?php $folder_path = '../../surveillant/fonctionnel/'.$donnees['Place'].'place.php';
        ?>
        <a href="<?php echo $folder_path ?>"><?php echo $donnees['Nom'] .' ' .$donnees['Prenom'] ?></a>
        <br />
      </p>
      <?php
    }

    $reponse->closeCursor();

    ?>
</body>
</html>
