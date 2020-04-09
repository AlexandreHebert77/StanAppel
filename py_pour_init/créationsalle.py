nomfichier = 'Salle3.php'
monfichier = open(nomfichier,'x')
monfichier.close

for n in range(1,225):

	#CREATION DOC
    monfichier = open(nomfichier, 'a')
    monfichier.write('\n \n \n <td><a href="'+str(n)+'place.php">')
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n <img <?php")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n $request = 'SELECT * FROM `appel` WHERE `Place`="+str(n)+"';")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n $counter = 0;")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write('\n $content = "";')
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`="+str(n)+"');")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n $statement->execute();")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n while ($row = $statement->fetch()) {")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n echo '<img src="+'"data:image/jpeg;base64,'+"'.base64_encode( $row['Image'] ).'"+'"/>'+"'"+";")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n }")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n ?></td>")
    monfichier.close
