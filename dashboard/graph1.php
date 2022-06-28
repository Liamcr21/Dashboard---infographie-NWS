
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

<h2 class="titregraph">Taille des structures</h2>

<canvas id="pieCanvas" aria-label="chart" role="img" class="graph"></canvas>
<br>

<table>
  <tr>
    <td class="r">PME (-500 employés)</td>
    <td class="r">256</td>
  </tr>

  <tr>
    <td class="b">TPE (-20 employés)</td>
    <td class="b">62</td>
  </tr>

  <tr>
    <td class="j">ETI (taille intermédiaire)</td>
    <td class="j">48</td>
  </tr>

  <tr>
    <td class="n">GE (Grande entreprise)</td>
    <td class="n">27</td>
  </tr>
</table>


</section>
   <script>
const pieCanvas = document.getElementById("pieCanvas");

const pieChart = new Chart(pieCanvas, {
	type: "pie",
	data: {
		labels: ["PME", "TPE", "ETI", "GE" ],
		datasets: [{
			data:[256,62,48,27],
			backgroundColor: [
			"#E94A34",
			"#00A5A5",
			"#FEC800",
			"black"
			],
			hoverOffset: 40
		}]

	}
})

   </script>     
</body>
</html>