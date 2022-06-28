
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

<h2 class="titreaccueill">Localisation des structures </h2>
<canvas id="locaCanvas" aria-label="chart" role="img" class="graph"></canvas>
<br>

<table>
  <tr>
    <td class="r">Métropole de Rouen</td>
    <td class="r">173</td>
  </tr>

  <tr>
    <td class="b">Rouen</td>
    <td class="b">103</td>
  </tr>

  <tr>
    <td class="j">Hors Normandie</td>
    <td class="j">81</td>
  </tr>

  <tr>
    <td class="n">Eure</td>
    <td class="n">56</td>
  </tr>
  <tr>
    <td class="v">Arrondissement de Rouen</td>
    <td class="v">15</td>
  </tr>
  <tr>
    <td class="vi">Normandie</td>
    <td class="vi">11</td>
  </tr>

</table>


</section>
   <script>
const locaCanvas = document.getElementById("locaCanvas");

const locaChart = new Chart(locaCanvas, {
	type: "bar",
	data: {
		labels: ["Métropole de Rouen", "Rouen", "Hors Normandie", "Eure", "Arrondissement de Rouen", "Normandie" ],
		datasets: [{
			data:[173,103,81,56,15,11],
			backgroundColor: [
			    "#E94A34",
			"#00A5A5",
			"#FEC800",
			"black",
            "green",
            "violet"
			
			]
		}]

	}
})

   </script>     
</body>
</html>