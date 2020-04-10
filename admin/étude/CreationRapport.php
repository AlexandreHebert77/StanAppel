<?php
            //On écrit un premier texte dans notre fichier
  $date = date("d.m.y");
  $heure = (int)date("h");
  if($heure <= 20)
  {
    $numéro = "1ere";
  }
  else {
    $numéro = "2eme";
  }
  $nomFichier = $numéro.'_etude_'.$date.'.txt';
  file_put_contents($nomFichier, 'ABSENT :');

  $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');

  $reponse = $pdo->query("SELECT * FROM `appel` WHERE Etat='ABS'");
  while ($donnees = $reponse->fetch())
  {
 $Interne = "\n".$donnees['Nom'] .' ' .$donnees['Prenom'];
 file_put_contents($nomFichier, $Interne, FILE_APPEND);
  }

$reponse->closeCursor();

?>

<?php
            //On écrit un premier texte dans notre fichier
            $date = date("d.m.y");
            $heure = (int)date("h");
            if($heure <= 20)
            {
              $numéro = "1ere";
            }
            else {
              $numéro = "2eme";
            }
            $nomFichier = $numéro.'_etude_'.$date.'.txt';
  file_put_contents($nomFichier, "\n\nRETARD :", FILE_APPEND);

  $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');

  $reponse = $pdo->query("SELECT * FROM `appel` WHERE Etat='RET'");
  while ($donnees = $reponse->fetch())
  {
 $Interne = "\n".$donnees['Nom'] .' ' .$donnees['Prenom'];
 file_put_contents($nomFichier, $Interne, FILE_APPEND);
  }

$reponse->closeCursor();

header('Location:../étude/étude.php
');
exit();
?>
