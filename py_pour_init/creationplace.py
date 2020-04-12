# AppelStan
# Python générateur de fiches d'identité
#
# Alexandre Hébert & Joseph de Gaullier
# appelstan1920@gmail.com
# ©AppelStan

for n in range(1,225):

	#CREATION DOC
	nomfichier = str(n) +  'place.php'
	monfichier = open(nomfichier,'x')
	monfichier.close
	#REMPLISSAGE
	monfichier = open(nomfichier, 'a')
	monfichier.write("<!doctype html>")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n <html lang="en">')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n   <head>")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n     <meta charset="utf-8">')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n     <link rel="stylesheet" href="style.css">')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n     <title>')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n       Interne')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n     </title>')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n   </head>')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n   <body id="body">')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n <h1><?php')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n      $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n      $request = 'SELECT * FROM `appel` WHERE `Place`=" + str(n) +"';")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n          foreach ($pdo ->query($request) as $result){")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n             echo $result['Nom']. ' '. $result['Prenom'];")
	monfichier.close


	monfichier = open(nomfichier, 'a')
	monfichier.write('\n 	     }')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n 	     ?></h1>")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n <p><?php")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n     $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n         $request = 'SELECT * FROM `appel` WHERE `Place`=" + str(n) +"';")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n      foreach ($pdo ->query($request) as $result){")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n         echo $result['Classe'];")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n      }')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n      ?> </p>")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n     <img <?php")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n     $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n     $request = 'SELECT * FROM `appel` WHERE `Place`="+str(n)+"';")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n     $counter = 0;')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n      $content = "";')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n     $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=\\'"+str(n)+"\\'');")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n    $statement->execute();')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n    while ($row = $statement->fetch()) {')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n     echo '"+'<img src="data:image/jpeg;base64,'+"'.base64_encode( $row['Image'] ).'"+'"/>'+"';")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n   }')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n     ?>')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n  <a class="btn btn-success btn-lg btn-block" href="'+ str(n)+'Present.php" role="button"  style="margin-top:40px; margin-bottom:20px">Present</a>')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n <a class="btn btn-danger btn-lg btn-block" href="'+ str(n)+'Retard.php" role="button"  style="margin-top:20px">Retardataire</a>')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n <footer class="sticky-top" style="margin-top:70px">')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n <p style="color:#FFF; font-size:10px">Tous droits réservés</p>')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n </footer>')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-O2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>')
	monfichier.close


	monfichier = open(nomfichier, 'a')
	monfichier.write('\n     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-jSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write('\n   </body>')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n </html>")
	monfichier.close
