<?php
$jour = date('D');
$pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');

$reponse = $pdo->query("SELECT * FROM `precochage` WHERE Jour='".$jour."'");
while ($donnees = $reponse->fetch())
{ $Etat = 'PRE';
  $stmt = $pdo -> prepare('UPDATE `appel` SET `Etat`=:Etat WHERE `Place`=:Place');
  $stmt->bindParam(':Place', $donnees['Place']);
  $stmt->bindParam(':Etat', $Etat);
  $stmt->execute();
  }
?>
