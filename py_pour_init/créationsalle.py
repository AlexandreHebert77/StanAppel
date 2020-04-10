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

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n  $request = 'SELECT Etat FROM appel WHERE Place="+str(n)+"';")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n foreach ($pdo ->query($request) as $result){")
    monfichier.close

    monfichier.close
    monfichier = open(nomfichier, 'a')
    monfichier.write("\n if($result['Etat'] == 'PRE'){")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n   $color = '#33FF44';")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n }")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n if($result['Etat'] == 'RET'){")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n   $color = '#FFC133';")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n }")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n if($result['Etat'] == 'ABS'){")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n   $color = '#D00B0B';")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n }")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n if($result['Etat'] == 'NOT'){")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n   $color = '#FFFFFF';")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n }")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n while ($row = $statement->fetch()) {")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n echo '<img"+' style="border-color:'+"'.$color.'"+'"'+" src="+'"data:image/jpeg;base64,'+"'.base64_encode( $row['Image'] ).'"+'"border="3"/>'+"'"+";")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n }")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n }")
    monfichier.close

    monfichier = open(nomfichier, 'a')
    monfichier.write("\n ?></td>")
    monfichier.close
