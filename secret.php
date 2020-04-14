<!-- AppelStan
Mots de passe

Alexandre Hébert & Joseph de Gaullier
appelstan1920@gmail.com
©AppelStan -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>MDP pref ou pion et redirection</title>
    </head>
    <body>

      <?php

          $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');
          $ID = $_POST['identifiant'];
          $sql = "SELECT * FROM `connexion` WHERE `identifiant`='".$ID."'";
          echo $sql;
          $stmt = $pdo -> query($sql);
          $result = $stmt->fetch();

          $passwd_crypt = $result['passwd'];
          $donnees_crypt = crypt($_POST['mot_de_passe'], '$6$rounds=5000$usesomesillystringforsalt$');
          echo $passwd_crypt;
          echo $donnees_crypt;

          if ($ID == 'surveillant' AND $donnees_crypt == $passwd_crypt)
          {
            echo ok;
            header('Location:surveillant/fonctionnel/salle.php ');
            exit();
          }
          if ($ID == 'prefecture' AND $donnees_crypt == $passwd_crypt)
           {
            header('Location:admin/menu.html');
            exit();
          }
          else // Sinon, on affiche un message d'erreur
          {
            echo '<p>Mot de passe incorrect</p>';
          }

    ?>


    </body>
</html>
