  <a class="btn btn-success btn-lg btn-block" href="CreationRapport.php" role="button"  style="margin-top:40px; margin-bottom:20px">Générer le rapport</a>
<?php
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
  echo '<a class="btn btn-success btn-lg btn-block" href="' . $nomFichier . '"download="'.$nomFichier.'" role="button"  style="margin-top:40px; margin-bottom:20px">Télécharger le rapport</a>';
?>
<table>
<tr>
  <td>

  <strong>ABSENT</strong> :
</td>
<td>
  <strong>RETARD</strong> :
</td>
</tr>
<tr>
  <td>

<?php

    $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');

    $reponse = $pdo->query("SELECT * FROM `appel` WHERE Etat='ABS'");
    while ($donnees = $reponse->fetch())
    {
  ?>
      <p>
        <?php echo $donnees['Nom'] .' ' .$donnees['Prenom']; ?><br />
      </p>
      <?php
    }

    $reponse->closeCursor();

    ?>
  </td>
  <td>


  </td>
  <td>

    <?php

        $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');

        $reponse = $pdo->query("SELECT * FROM `appel` WHERE Etat='RET'");
        while ($donnees = $reponse->fetch())
        {
      ?>
          <p>
            <?php echo $donnees['Nom'] .' ' .$donnees['Prenom']; ?><br />
          </p>
          <?php
        }

        $reponse->closeCursor();

        ?>
      </td>
    </tr>
  </table>
