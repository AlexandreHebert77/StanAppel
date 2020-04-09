for n in range(1,225):

	#CREATION DOC
	nomfichier = str(n) +  'Present.php'
	monfichier = open(nomfichier,'x')
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("<?php")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n       $Place="+str(n)+";")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n   $Etat='PRE';")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n       $stmt = $pdo -> prepare('UPDATE `appel` SET `Etat`=:Etat WHERE `Place`=:Place');")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n       $stmt->bindParam(':Place', $Place);")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n       $stmt->bindParam(':Etat', $Etat);")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n       $stmt->execute();")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n       echo 'L\\'interne souffre mais il fait ca bien';")
	monfichier.close

	monfichier = open(nomfichier, 'a')
	monfichier.write("\n ?>")
	monfichier.close
