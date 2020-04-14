# AppelStan


INITIALISATION
python requis
WAMP

1) Création bdd

id mysql 'root' 'root'

a) Créer la table 'appel'
Nom		varchar(20)
Prenom		varchar(20)
Classe		varchar(5)
Place		int(5)
Etat		varchar(4)
Image		blob

b) Créer la table 'connexion'
identifiant varchar(20)
passwd varchar(120)

c) Remplir la table
pip install pymysql
éxécuter appelstan\py_pour_init\init.py

4) Relancer WAMP

5) Création d'un virtuel host

Accéder à 127.0.0.1
cliquer sur "ajouter virtual host"
suivre la procédure est séléctionner le fichier appelstan
