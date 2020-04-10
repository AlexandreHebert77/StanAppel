<!DOCTYPE html>
<html>
<head>
<title>Appel</title>

<link rel="stylesheet" href="../../style/index.css">
<head>

<body>
  <a class="btn btn-success btn-lg btn-block" href="DebutEtude.php" role="button"  style="margin-top:40px; margin-bottom:20px">Début de l'étude</a>




<table>
<tr>


 <td><a href="1place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=1';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=1');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=1';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="2place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=2';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=2');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=2';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="3place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=3';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=3');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=3';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="4place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=4';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=4');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=4';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="5place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=5';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=5');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=5';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="6place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=6';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=6');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=6';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="7place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=7';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=7');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=7';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="8place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=8';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=8');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=8';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="9place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=9';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=9');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=9';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>

</tr><tr>
 <td><a href="10place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=10';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=10');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=10';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="11place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=11';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=11');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=11';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="12place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=12';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=12');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=12';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="13place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=13';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=13');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=13';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="14place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=14';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=14');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=14';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="15place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=15';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=15');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=15';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="16place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=16';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=16');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=16';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="17place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=17';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=17');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=17';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="18place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=18';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=18');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=18';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="19place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=19';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=19');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=19';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="20place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=20';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=20');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=20';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="21place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=21';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=21');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=21';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="22place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=22';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=22');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=22';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="23place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=23';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=23');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=23';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="24place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=24';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=24');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=24';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="25place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=25';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=25');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=25';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="26place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=26';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=26');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=26';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="27place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=27';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=27');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=27';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="28place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=28';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=28');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=28';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="29place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=29';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=29');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=29';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="30place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=30';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=30');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=30';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="31place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=31';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=31');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=31';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="32place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=32';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=32');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=32';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="33place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=33';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=33');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=33';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="34place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=34';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=34');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=34';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="35place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=35';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=35');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=35';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="36place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=36';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=36');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=36';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="37place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=37';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=37');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=37';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="38place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=38';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=38');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=38';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="39place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=39';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=39');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=39';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="40place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=40';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=40');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=40';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="41place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=41';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=41');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=41';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="42place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=42';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=42');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=42';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="43place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=43';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=43');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=43';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="44place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=44';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=44');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=44';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="45place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=45';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=45');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=45';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="46place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=46';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=46');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=46';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="47place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=47';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=47');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=47';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="48place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=48';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=48');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=48';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="49place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=49';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=49');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=49';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="50place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=50';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=50');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=50';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="51place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=51';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=51');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=51';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="52place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=52';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=52');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=52';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="53place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=53';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=53');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=53';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="54place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=54';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=54');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=54';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>

 </tr><tr>
 <td><a href="55place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=55';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=55');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=55';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="56place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=56';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=56');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=56';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="57place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=57';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=57');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=57';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="58place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=58';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=58');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=58';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="59place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=59';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=59');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=59';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="60place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=60';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=60');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=60';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="61place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=61';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=61');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=61';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="62place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=62';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=62');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=62';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="63place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=63';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=63');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=63';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="64place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=64';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=64');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=64';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="65place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=65';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=65');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=65';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="66place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=66';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=66');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=66';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="67place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=67';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=67');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=67';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="68place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=68';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=68');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=68';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="69place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=69';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=69');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=69';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="70place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=70';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=70');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=70';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="71place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=71';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=71');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=71';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="72place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=72';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=72');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=72';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="73place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=73';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=73');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=73';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="74place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=74';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=74');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=74';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="75place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=75';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=75');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=75';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="76place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=76';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=76');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=76';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="77place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=77';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=77');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=77';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="78place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=78';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=78');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=78';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="79place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=79';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=79');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=79';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="80place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=80';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=80');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=80';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="81place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=81';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=81');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=81';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="82place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=82';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=82');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=82';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="83place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=83';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=83');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=83';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="84place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=84';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=84');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=84';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="85place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=85';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=85');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=85';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="86place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=86';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=86');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=86';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="87place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=87';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=87');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=87';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="88place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=88';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=88');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=88';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="89place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=89';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=89');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=89';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="90place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=90';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=90');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=90';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="91place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=91';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=91');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=91';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="92place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=92';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=92');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=92';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="93place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=93';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=93');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=93';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="94place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=94';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=94');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=94';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="95place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=95';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=95');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=95';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="96place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=96';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=96');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=96';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="97place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=97';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=97');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=97';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="98place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=98';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=98');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=98';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="99place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=99';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=99');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=99';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="100place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=100';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=100');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=100';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="101place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=101';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=101');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=101';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="102place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=102';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=102');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=102';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="103place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=103';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=103');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=103';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="104place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=104';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=104');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=104';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="105place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=105';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=105');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=105';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="106place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=106';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=106');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=106';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="107place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=107';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=107');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=107';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="108place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=108';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=108');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=108';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="109place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=109';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=109');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=109';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="110place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=110';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=110');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=110';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="111place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=111';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=111');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=111';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="112place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=112';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=112');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=112';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="113place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=113';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=113');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=113';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="114place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=114';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=114');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=114';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="115place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=115';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=115');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=115';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="116place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=116';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=116');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=116';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="117place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=117';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=117');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=117';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>

 </tr><tr>
 <td><a href="118place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=118';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=118');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=118';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="119place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=119';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=119');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=119';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="120place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=120';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=120');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=120';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="121place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=121';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=121');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=121';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="122place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=122';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=122');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=122';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="123place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=123';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=123');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=123';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="124place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=124';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=124');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=124';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="125place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=125';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=125');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=125';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="126place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=126';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=126');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=126';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="127place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=127';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=127');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=127';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="128place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=128';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=128');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=128';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="129place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=129';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=129');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=129';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="130place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=130';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=130');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=130';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="131place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=131';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=131');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=131';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="132place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=132';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=132');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=132';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="133place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=133';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=133');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=133';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="134place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=134';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=134');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=134';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="135place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=135';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=135');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=135';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="136place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=136';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=136');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=136';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="137place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=137';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=137');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=137';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="138place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=138';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=138');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=138';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="139place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=139';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=139');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=139';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="140place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=140';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=140');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=140';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="141place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=141';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=141');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=141';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="142place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=142';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=142');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=142';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="143place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=143';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=143');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=143';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="144place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=144';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=144');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=144';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="145place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=145';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=145');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=145';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="146place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=146';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=146');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=146';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="147place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=147';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=147');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=147';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="148place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=148';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=148');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=148';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="149place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=149';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=149');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=149';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="150place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=150';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=150');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=150';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="151place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=151';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=151');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=151';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="152place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=152';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=152');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=152';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="153place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=153';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=153');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=153';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>

 </tr><tr>
 <td><a href="154place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=154';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=154');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=154';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="155place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=155';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=155');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=155';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="156place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=156';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=156');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=156';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="157place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=157';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=157');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=157';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="158place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=158';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=158');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=158';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="159place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=159';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=159');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=159';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="160place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=160';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=160');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=160';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="161place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=161';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=161');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=161';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="162place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=162';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=162');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=162';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="163place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=163';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=163');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=163';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="164place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=164';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=164');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=164';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="165place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=165';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=165');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=165';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="166place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=166';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=166');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=166';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="167place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=167';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=167');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=167';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="168place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=168';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=168');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=168';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="169place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=169';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=169');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=169';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="170place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=170';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=170');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=170';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="171place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=171';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=171');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=171';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>

 </tr><tr>
 <td><a href="172place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=172';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=172');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=172';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="173place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=173';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=173');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=173';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="174place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=174';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=174');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=174';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="175place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=175';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=175');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=175';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="176place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=176';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=176');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=176';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="177place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=177';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=177');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=177';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="178place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=178';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=178');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=178';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="179place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=179';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=179');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=179';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="180place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=180';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=180');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=180';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="181place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=181';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=181');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=181';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="182place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=182';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=182');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=182';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="183place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=183';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=183');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=183';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="184place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=184';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=184');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=184';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="185place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=185';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=185');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=185';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="186place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=186';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=186');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=186';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="187place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=187';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=187');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=187';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="188place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=188';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=188');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=188';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="189place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=189';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=189');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=189';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="190place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=190';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=190');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=190';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="191place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=191';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=191');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=191';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="192place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=192';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=192');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=192';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="193place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=193';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=193');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=193';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="194place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=194';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=194');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=194';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="195place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=195';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=195');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=195';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="196place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=196';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=196');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=196';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="197place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=197';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=197');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=197';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="198place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=198';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=198');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=198';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="199place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=199';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=199');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=199';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="200place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=200';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=200');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=200';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="201place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=201';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=201');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=201';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="202place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=202';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=202');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=202';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="203place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=203';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=203');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=203';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="204place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=204';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=204');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=204';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="205place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=205';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=205');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=205';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="206place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=206';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=206');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=206';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="207place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=207';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=207');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=207';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>

 </tr><tr>
 <td><a href="208place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=208';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=208');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=208';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="209place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=209';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=209');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=209';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="210place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=210';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=210');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=210';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="211place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=211';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=211');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=211';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="212place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=212';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=212');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=212';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="213place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=213';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=213');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=213';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="214place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=214';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=214');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=214';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="215place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=215';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=215');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=215';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="216place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=216';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=216');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=216';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>
 </tr><tr>

 <td><a href="217place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=217';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=217');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=217';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="218place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=218';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=218');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=218';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="219place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=219';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=219');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=219';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="220place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=220';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=220');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=220';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="221place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=221';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=221');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=221';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="222place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=222';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=222');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=222';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="223place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=223';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=223');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=223';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>


 <td><a href="224place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=224';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=224');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=224';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>

 <td><a href="225place.php">
 <img <?php
   $pdo = new PDO('mysql:host=localhost;port=3308; dbname=ETUDE', 'root', '');
 $request = 'SELECT * FROM `appel` WHERE `Place`=225';
 $counter = 0;
 $content = "";
 $statement = $pdo->prepare('SELECT `Image` FROM `appel` WHERE `Place`=224');
 $statement->execute();
  $request = 'SELECT Etat FROM appel WHERE Place=225';
 foreach ($pdo ->query($request) as $result){
 if($result['Etat'] == 'PRE'){
   $color = '#33FF44';
 }
 if($result['Etat'] == 'RET'){
   $color = '#FFC133';
 }
 if($result['Etat'] == 'ABS'){
   $color = '#D00B0B';
 }
 if($result['Etat'] == 'NOT'){
   $color = '#FFFFFF';
 }
 while ($row = $statement->fetch()) {
 echo '<img style="border-color:'.$color.'" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"border="3"/>';
 }
 }
 ?></td>

</tr>


</table>

</body>
</html>
