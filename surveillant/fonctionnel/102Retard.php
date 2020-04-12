<?php
 $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');
       $Place=102;
   $Etat='RET';
       $stmt = $pdo -> prepare('UPDATE `appel` SET `Etat`=:Etat WHERE `Place`=:Place');
       $stmt->bindParam(':Place', $Place);
       $stmt->bindParam(':Etat', $Etat);
       $stmt->execute();
       echo 'L\'interne souffre mais il fait ca bien';
 ?>