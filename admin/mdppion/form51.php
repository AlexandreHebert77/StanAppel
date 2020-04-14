<?php
$pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');

      $New_mdp=$_POST['New_mdp'];
      $New2_mdp=$_POST['New2_mdp'];

      if($New_mdp==$New2_mdp)
      {
        $donnees_crypt = crypt($New_mdp, '$6$rounds=5000$usesomesillystringforsalt$');

      //$stmt = $pdo -> prepare('INSERT INTO appel(Nom, Prenom, Classe, Place, Etat, Image) VALUES (:Nom, :Prenom, :Classe, :Place, :Etat, :Image)');
      $stmt = $pdo -> prepare("UPDATE connexion SET passwd=:Password WHERE identifiant='surveillant'");

      $stmt->bindParam(':Password', $donnees_crypt);
      $stmt->execute();

      echo 'Le mot de passe a été modifié';
    }
    else
    {
      echo 'Les mots de passe ne sont pas identiques';
    }
?>
