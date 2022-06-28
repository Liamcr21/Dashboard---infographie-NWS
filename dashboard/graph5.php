
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

<h2 class="titreaccueill">Répartition des alternants et des stagiaires </h2>
<canvas id="stageCanvas" aria-label="chart" role="img" class="graph"></canvas>
<br>

<table>
  <tr>
    <td class="r">Alternance</td>
    <td class="r">249</td>
  </tr>

  <tr>
    <td class="b">Stage</td>
    <td class="b">143</td>
  </tr>

</table>


</section>
   <script>
const stageCanvas = document.getElementById("stageCanvas");

const stageChart = new Chart(stageCanvas, {
	type: "pie",
	data: {
		labels: ["Alternance", "stage" ],
		datasets: [{
			data:[249,143],
			backgroundColor: [
                "#E94A34",
			"#00A5A5"
			
			]
		}]

	}
})

   </script>     
</body>
</html>