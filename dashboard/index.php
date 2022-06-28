
<?php

$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=basesoutenance;charset=utf8',
    'root',
    ''
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Liam Cariou</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="main.php" />
    
</head>
<body>
<section class="Contenunav">
<div class="titreg">   
 <img class="logonav" src="images/nws.png" alt="">
</div>
<h1 class="titrenavbar"> 5 données sur l'alternance à la NWS</h1>
 <div class="profilcontenu">
<img class="logoprofil" src="images/user.png" alt="">
<a class="nomprofil" href="#">Liam Cariou</a>
</div>

</section>

        <section class="sidebar">
<div class="sidenav">
<a href="index.php">Accueil</a>
  <a href="graph1.php">Taille des structures</a>
  <a href="graph2.php">Statuts des entreprises</a>
  <a href="graph3.php">Secteurs d'activités</a>
  <a href="graph4.php">Localisation</a>
  <a href="graph5.php">Stage ou Alternance</a>
</div>
<div class="contenugraph">
<h1 class="titreaccueill">5 données sur l'alternance à la Normandie Web School</h1>
 <p class="paccueill">Ce dashboard a été créé pour aider les futurs étudiants de la Normandie Web School à trouver une alternance plus facilement et efficacement
     . <br><br> Grâce aux 5 graphiques présentés, vous allez pouvoir vous renseigner et cibler plus rapidement dans quel type d'entreprise postuler.
 </p>
 <br><br><br><br><br>
 <img class="imgaccueill" src="images/nws.png">
</div>
</section>
        
</body>
</html>
