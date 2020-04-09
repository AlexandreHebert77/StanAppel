<html>
    <head><title>Formulaire de saisie d'un nouvel interne</title>
<link rel="stylesheet" href="../../libs/bootstrap_sans_internet.css">
<link rel="stylesheet" href="../../style/styleForm.css">

    </head>
    <body>
        <h1>Formulaire de saisie d'un nouvel interne</h1>
        <!-- <div class="imgLogo"><img src="../../img/logoStanTransp.png" alt="logo"></div> -->
        <h2>Entrez les données demandées :</h2>



<div class="formulaire">
        <form name="Etude" method="post" action="form11.php" enctype="multipart/form-data">
            Nom : <input class="form-control" type="text" name="Nom" placeholder="Nom"/> <br/>
	          Prenom : <input class="form-control" type="text" name="Prenom" placeholder="Prénom"/> <br/>
            Classe : <input class="form-control" type="text" name="Classe" placeholder="Classe"/> <br/>
            Place : <input type="text" class="form-control" name="Place" placeholder="Place"/><br/>
            Photo : <input type="file" class="btn btn-lg" name="upFile" id="upFile" accept=".png,.gif,.jpg,.webp" required>

            <div>
            <input type="submit" class="btn btn-lg" style="color:black; margin:10px" value="Valider">
            </div>

        </form>
</div>

    </body>
</html>
