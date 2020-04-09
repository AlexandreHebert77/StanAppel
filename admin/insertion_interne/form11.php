<?php
$pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');

      $Nom=$_POST['Nom'];
      $Prenom=$_POST['Prenom'];
      $Classe=$_POST['Classe'];
      $Place=$_POST['Place'];
      $Etat='ABS';

      define('MAX_UP', 16000000);

      if ($_FILES['upFile']['size']==0) { die("No file selected"); }
      if ($_FILES['upFile']['size']>MAX_UP) { die("Exceeded maximum allowed size"); }
      if (exif_imagetype($_FILES['upFile']['tmp_name'])===false) { die("Not an image"); }
      $Image = file_get_contents($_FILES['upFile']['tmp_name']);

      //$stmt = $pdo -> prepare('INSERT INTO appel(Nom, Prenom, Classe, Place, Etat, Image) VALUES (:Nom, :Prenom, :Classe, :Place, :Etat, :Image)');
      $stmt = $pdo -> prepare('UPDATE appel SET Nom=:Nom,Prenom=:Prenom,Classe=:Classe,Etat=:Etat,Image=:Image WHERE Place=:Place');

      $stmt->bindParam(':Nom', $Nom);
      $stmt->bindParam(':Prenom', $Prenom);
      $stmt->bindParam(':Classe', $Classe);
      $stmt->bindParam(':Place', $Place);
      $stmt->bindParam(':Etat', $Etat);
      $stmt->bindParam(':Image', $Image);
      $stmt->execute();

      echo 'L\'interne est ajouté à la salle d\'étude';
?>
