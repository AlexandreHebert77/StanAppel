<!doctype html>
 <html lang="en">
   <head>
 
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
 
 
     <title>
       Interne
     </title>
   </head>
   <body id="body">
 
 <h1><?php
      $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');
      $request = 'SELECT * FROM `appel` WHERE `Place`=123';
          foreach ($pdo ->query($request) as $result){
             echo $result['Nom']. ' '. $result['Prenom'];
 	     }
 	     ?></h1>
 
 <p><?php
     $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');
         $request = 'SELECT * FROM `appel` WHERE `Place`=123';
      foreach ($pdo ->query($request) as $result){
         echo $result['Classe'];
      }
      ?> </p>
     <img <?php
     $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');
     $request = 'SELECT * FROM `appel` WHERE `Place`=123';
     $counter = 0;
      $content = "";
     $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=\'123\'');
    $statement->execute();
    while ($row = $statement->fetch()) {
     echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"/>';
   }
     ?>
  <a class="btn btn-success btn-lg btn-block" href="123Present.php" role="button"  style="margin-top:40px; margin-bottom:20px">Present</a>
 <a class="btn btn-danger btn-lg btn-block" href="123Retard.php" role="button"  style="margin-top:20px">Retardataire</a>
 <footer class="sticky-top" style="margin-top:70px">
 <p style="color:#FFF; font-size:10px">Tous droits r�serv�s</p>
 </footer>
 
 
 
 
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-O2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-jSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 
 </html>