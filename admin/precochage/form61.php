<?php

    $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', 'root');

    $Place=$_POST['Place'];
    $Jour=$_POST['Jour'];

    if($Jour == 'lundi'){
      $Day= 'Mon';
    }
    elseif($Jour == 'mardi'){
      $Day= 'Tue';
    }
    elseif($Jour == 'jeudi'){
      $Day= 'Thu';
    }
    elseif($Jour == 'vendrdi'){
      $Day= 'Fri';
    }
    else{
      echo 'erreure de format du jour';
    }

    $stmt = $pdo -> prepare("INSERT INTO `precochage` (`Jour`, `Place`) VALUES (:Jour, :Place);");
    $stmt->bindParam(':Jour', $Day);
    $stmt->bindParam(':Place', $Place);

    $stmt->execute();

    echo 'L\'interne est précoché pour la première étude du '.$Jour;
?>
